<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

    public $contactus;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contactus)
    {
        $this->contactus = $contactus;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_USERNAME','ilko.iv@gmail.com'))
                    ->view('mails.contactus');
    }
}
