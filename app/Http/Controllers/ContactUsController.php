<?php

namespace App\Http\Controllers;

use App\Rules\Recaptcha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Notifications\ContactUsNotification;
use Illuminate\Support\Facades\Notification;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Test\Constraint\ResponseStatusCodeSame;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Display the specified resource.
     */
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email:dns,spoof|indisposable',
            'subject' => 'required|string|max:100',
            'message' => 'required|string',
            'recaptchaToken' => ['required', new Recaptcha()],
        ]);

        $cacheKey = 'contact_message_' . md5($validated['email'] . $validated['subject']);

        // Check if the message and topic are cached
        if (Cache::has($cacheKey)) {
            // return back()->with('info', 'You have already sent a message regarding this subject. Please try again later.');
            return response()->json([
                'status' => false,
                'message' => 'You have already sent a message regarding this subject. Please try again later.'
            ], Response::HTTP_CONFLICT);
        }

        Notification::route('mail', config('mail.from.address'))
            ->notify(new ContactUsNotification($validated));

        Cache::put($cacheKey, true, now()->addMinutes(30));

        return response()->json([
            'status' => true,
            'message' => 'Message sent successfully!'
        ], Response::HTTP_OK);
        // return back()->with('success', 'Message sent successfully!');
    }
}
