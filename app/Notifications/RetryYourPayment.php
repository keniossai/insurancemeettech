<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\URL;

class RetryYourPayment extends Notification
{
    use Queueable;

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }


    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->greeting("Dear $notifiable->name")
            ->line("Your previous payment has been successfully refunded. Kindly login to attempt payment again.")
            ->line("Please accept our sincere apologies for any inconvenience caused.")
            ->action('Pay now...', $this->profileUrl($notifiable));
    }


    protected function profileUrl($notifiable)
    {
        return URL::temporarySignedRoute('users.payments.show', now()->addWeek(), $notifiable);
    }
}
