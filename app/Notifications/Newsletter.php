<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\HtmlString;

class Newsletter extends Notification implements ShouldQueue
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
            ->subject('Early Birds Ends - Take advantage of the early bird rates)')
            ->greeting("Dear Intending Delegate")
            ->line("It’s now officially 12hours to the close of early bird registration. Take advantage of the early bird rates and make your payment using this link")
            ->action('Pay Now', route('users.payments.show', $notifiable))
            ->line("Rates valid until midnight of June 4th, 2023")
            ->salutation(new HtmlString("<br>Regards,<br>Annual General Conference Planning Committee 2023"));


//        ->subject('RE: Collection of Conference Material (Clarification on Opening Ceremony)')
//            ->greeting("Dear $notifiable->name")
//            ->line("Please see the attached document for your reference.")
//            ->attach("https://res.cloudinary.com/nba/image/upload/v1660806977/misc/AGC_Memo_on_Opening_Ceremony_Clarification_lyz1lu.pdf");
    }
}
