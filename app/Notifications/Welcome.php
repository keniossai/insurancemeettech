<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\HtmlString;

class Welcome extends Notification
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
     * @return MailMessage
     */
    public function toMail($notifiable)
    {
       $notifiable->assignRegNumber(); // to make sure every reg_number is generate before sending the mail

        return (new MailMessage)
            ->subject("NBA AGC 2023 - Confirmation of Registration")
            ->greeting("Dear $notifiable->name")
            ->line("Thank you for registering for the Nigerian Bar Association 2023 Annual General Conference with the theme;
                **Getting it Right**, scheduled to hold from Friday, the 25th of August to Friday,
                the 1st of September 2023 in MKO Abiola Stadium Abuja.")
            ->when($notifiable->isAttendingVirtually(), function ($message) {

                $message->line("Please note that it will be a Hybrid Conference and further details about the Conference such as Programme, Speakers, etc. can be found via the NBA Conference website. Additionally, as a virtual participant your conference materials will be electronic and you will be able to access them via your profile dashboard."
                );
            }, function ($message) use ($notifiable) {

                $message->line("Your registration number is **{$notifiable->reg_number}**.")
                    ->line("Please note that it will be a Hybrid Conference and as a physical delegate, you will be
                    required to show this mail and an official photo identification of yourself in order to collect
                    your Conference materials. Also, further details about the Conference such as Programme,
                    Speakers, etc. can be found via the NBA Conference website."
                );
            })
            ->line("On behalf of the Technical Committee on Conference Planning (AGCPC) for the NBA 2023
                Annual General Conference, I look forward to welcoming you.")
            ->action('Visit the conference site', route('home'))
            ->salutation(new HtmlString("Mazi Afam Osigwe, SAN<br><small>AGCPC Chairperson</small>"));
    }
}
