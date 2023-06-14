<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\URL;

class ActivateYourRegistration extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


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
            ->subject('IMT 2023 - Complete your registration in seconds')
            ->greeting("Dear $notifiable->name")
            ->line('Time is precious!')
            ->line("The IMT 2023 registration portal is now open, and we are very delighted to let you know
                that you can easily register for this year's conference using your registration profile from last year.")
            ->line('This lets you skip the long registration form entirely and simply proceed to make payment.')
            ->line("Of course, you'll also have the opportunity to update your profile before making payment,
                just in case anything changed.")
            ->line("You can click on this special link we've prepared for you to review your profile and pay
                for your registration seamlessly.")
            ->action('Review your profile and pay...', $this->loginUrl($notifiable));
    }


    protected function loginUrl($notifiable)
    {
        return URL::temporarySignedRoute('users.show', now()->addMonth(), $notifiable);
    }
}
