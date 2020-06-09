<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderOk extends Mailable
{
    use Queueable, SerializesModels;

    public $orderok;
    public $subject;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($orderok, $subject)
    {
        $this->orderok = $orderok;
        $this->subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_USERNAME','ilko.iv@gmail.com'))
            ->text('mails.orderok');
    }
}
