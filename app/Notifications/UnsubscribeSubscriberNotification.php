<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UnsubscribeSubscriberNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct()
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
        return (new MailMessage)
            ->subject('We’re sad to see you go 🥹')
            ->greeting('Hello ' . $notifiable->email)
            ->line('We’re truly sorry to see you unsubscribe. Your presence has meant a lot to us, and we’ll miss having you as part of our community.')
            ->line('If this was a mistake, or if you change your mind, you’re always welcome back.')
            ->action('Re-subscribe Now', $notifiable->getResubscribeUrl())
            ->line('Thank you for being with us, and we wish you the very best.');
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
