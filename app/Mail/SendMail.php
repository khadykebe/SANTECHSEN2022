<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    
    public $clients;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($clients)
    {
        $this->clients = $clients;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()

    {
        return $this->subject('confirmation demande')->view('emails.SendMail');
       // return $this->view('view.name');
    }
}
