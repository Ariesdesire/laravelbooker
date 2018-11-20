<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\NexmoMessage;

class TourApproved extends Notification
{
    use Queueable;

    public $route;
    public $name;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($route, $name)
    {
      $this-> route = $route;
      $this-> name = $name;

    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail','nexmo'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('new Tour Booked')
                      ->line("$this->name  likes:". $this->route->description)
                    ->action('Scout The Route', route('tours'))
                    ->line('Thank you for using choosing Halia Tours!');
    }


    /**
     * Get the nexmo representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return
     **/
    public function toNexmo($notifiable)
    {
        return (new NexmoMessage)
                    ->content("$this->name  likes:". $this->route->description)
                     ->from('13074604572');
    }





    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
