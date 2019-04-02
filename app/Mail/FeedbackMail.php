<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class FeedbackMail extends Mailable
{
    use Queueable, SerializesModels;
    public $feedback;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    

    public function __construct($feedback)
    {
        $this->feedback = $feedback;
    }

    /**
     * Build the message.
     *
     * @return $this
     */

    public function build()
    {
        $data = $this->feedback;

        return $this->view('emails.feedback')
                    ->from($data['email'] , $data['name'])
                    ->subject('SMC Singapore')  //<= how to pass variable on this subject
                    ->with([
                        'title'       => $data['subject'],
                        'content'     => $data['message'] //this works without queue
                    ]);
    }
}

