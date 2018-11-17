<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $name;
    public $phone;
    public $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
      $this->name = $request-> name;
      $this->email = $request-> email;
      $this->phone = $request-> phone;
      $this->message = $request-> message;


    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
  return $this->from ($this->email, $this->name)
                    ->subject($this->name)
                    ->markdown('email.contact');
    }
}
