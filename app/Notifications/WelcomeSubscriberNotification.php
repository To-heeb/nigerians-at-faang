<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\URL;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class WelcomeSubscriberNotification extends Notification
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
            ->subject('Welcome to Our Mailing List 🎉')
            ->greeting('Thank you for subscribing!')
            ->line('Your email address has been successfully verified and you are now subscribed to our mailing list.')
            ->line('We are pleased to welcome you to our community and look forward to keeping you informed with our latest updates.')
            ->line('We’re excited to have you on board 🚀')
            ->line(new HtmlString(
                '<p class="unsubscribe">If you no longer wish to receive these emails,
            <a href="' . $notifiable->getUnsubscribeUrl() . '" class="unsubscribe-link">Unsubscribe</a>.</p>'
            ));
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
