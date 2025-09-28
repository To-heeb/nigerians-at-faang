<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use App\Models\MailingListSubscriber;
use App\Notifications\VerifySubscriberNotification;
use App\Notifications\WelcomeSubscriberNotification;
use App\Http\Requests\StoreMailingListSubscriberRequest;
use App\Notifications\UnsubscribeSubscriberNotification;
use App\Http\Requests\UpdateMailingListSubscriberRequest;

class SubscriberController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(['email' => 'required|email:dns,spoof|unique:mailing_list_subscribers,email|indisposable']);

        $email = strtolower($validated['email']);
        $token = Str::uuid();

        // Either get existing or create new
        $subscriber = MailingListSubscriber::firstOrNew(['email' => $email]);

        if ($subscriber->exists && is_null($subscriber->unsubscribed_at) && $subscriber->is_verified) {
            return response()->json([
                'status' => true,
                'message' => 'You are already subscribed!.'
            ], Response::HTTP_OK);
        }

        $subscriber->fill([
            'is_verified' => false,
            'verification_token' => $token,
            'unsubscribed_at' => null,
        ])->save();

        $subscriber->notify(new VerifySubscriberNotification($subscriber));

        $message =  $subscriber->wasRecentlyCreated
            ? 'Please check your email to confirm your subscription.'
            : 'We’ve sent you a new confirmation link. Please check your email.';

        return response()->json([
            'status' => true,
            'message' => $message
        ], Response::HTTP_OK);
    }

    public function verify($token)
    {
        $subscriber = MailingListSubscriber::where('verification_token', $token)->firstOrFail();

        $subscriber->update([
            'is_verified' => true,
            'subscribed_at' => now(),
            'verification_token' => null,
        ]);

        $subscriber->notify(new WelcomeSubscriberNotification());

        return view('mailing-list-subscribers.verified');
    }

    public function unsubscribe($email)
    {
        $subscriber = MailingListSubscriber::where('email', $email)->firstOrFail();

        $subscriber->update([
            'is_verified' => false,
            'unsubscribed_at' => now(),
        ]);

        $subscriber->notify(new UnsubscribeSubscriberNotification());

        return view('mailing-list-subscribers.unsubscribed');
    }
}
