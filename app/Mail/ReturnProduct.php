<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ReturnProduct extends Mailable
{
    use Queueable, SerializesModels;

    public $returnproduct;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($returnproduct)
    {
        $this->returnproduct = $returnproduct;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_USERNAME','ilko.iv@gmail.com'))
            ->view('mails.returnproduct');
    }
}
