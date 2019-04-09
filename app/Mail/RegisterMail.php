<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegisterMail extends Mailable
{
    use Queueable, SerializesModels;
    public $userData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($userData)
    {
         $this->userData = $userData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->view('view.name');

        $data = $this->userData;

        return $this->view('emails.register')
                    ->from('teenutc12@gmail.com',$data['name'])
                    ->subject('SMC Singapore - Registration')  //<= how to pass variable on this subject
                    ->with([
                        'title'       => 1,
                        'content'     => 2 //this works without queue
                    ]);
    }
}
