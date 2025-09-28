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
            ->subject('Verify Your Subscription')
            ->greeting('Dear Subscriber,')
            ->line('Thank you for your subscription request. To complete the process and activate your subscription, please verify your email address by clicking the button below.')
            ->action('Verify Email Address', $verifyUrl)
            ->line('Please note that this verification link will expire in 2 hours for security purposes.')
            ->line('If you did not initiate this subscription request, no further action is required and you may disregard this message.');
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
