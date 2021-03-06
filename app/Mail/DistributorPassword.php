<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DistributorPassword extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($title,$body)
    {
        // $this->$code = $code;
        view()->share('title', $title);
        view()->share('body', $body);

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Distributor Account Credentials")->view('emails.DistributorPassword')->from("demo.campusportal@gmail.com","Chairman Foam");
    }
}
