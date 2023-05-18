<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMassageMail extends Mailable
{
    use Queueable, SerializesModels;

    public $massage; // Ganti dengan nama property yang sesuai

    /**
     * Create a new message instance.
     *
     * @param  string  $massage
     * @return void
     */
    public function __construct($massage)
    {
        $this->massage = $massage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.send_massage') // Ganti dengan nama tampilan email yang sesuai
                    ->subject('New Massage'); // Ganti dengan subjek email yang diing
    
    }
}