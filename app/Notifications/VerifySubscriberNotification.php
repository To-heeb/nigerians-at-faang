<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\URL;
use App\Models\MailingListSubscriber;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class VerifySubscriberNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(private MailingListSubscriber $subscriber)
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {

        $verifyUrl = URL::temporarySignedRoute(
            'subscribers.verify',
            now()->addHours(2),
            [
                'subscriber' => $this->subscriber->id,
                'token' => $this->subscriber->verification_token
            ]
        );

        return (new MailMessage)
            ->subject('Verify your subscription')
            ->greeting('Hello!')
            ->line('Please click the button below to verify your email and confirm your subscription.')
            ->action('Verify Email', $verifyUrl)
            ->line('This link will expire in 2 hours. If you did not request this, you can ignore this email.');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
