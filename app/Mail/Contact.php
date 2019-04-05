<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public $fromName;
    public $fromAddress;
    public $messageText;

    /**
     * Create a new message instance.
     *
     * @param $fromName
     * @param $fromAddress
     * @param $messageText
     */
    public function __construct($fromName, $fromAddress, $messageText)
    {
        $this->fromName = $fromName;
        $this->fromAddress = $fromAddress;
        $this->messageText = $messageText;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('robot@thdoteo.com')
            ->subject('Message from ' . $this->fromName)
            ->view('contact.email');
    }
}
