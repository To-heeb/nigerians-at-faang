<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Notifications\ContactUsNotification;
use Illuminate\Support\Facades\Notification;

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
            'email' => 'required|email:dns,spoof',
            'subject' => 'required|string|max:100',
            'message' => 'required|string',
        ]);

        $cacheKey = 'contact_message_' . md5($validated['email'] . $validated['subject']);

        // Check if the message and topic are cached
        if (Cache::has($cacheKey)) {
            return back()->with('info', 'You have already sent a message regarding this subject. Please try again later.');
        }

        Notification::route('mail', config('mail.from.address'))
            ->notify(new ContactUsNotification($validated));

        Cache::put($cacheKey, true, now()->addMinutes(30));

        return back()->with('success', 'Message sent successfully!');
    }
}
