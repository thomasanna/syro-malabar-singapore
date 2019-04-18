<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NocRequestMail extends Mailable
{
    use Queueable, SerializesModels;
     public $requestData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($requestData)
    {
       $this->requestData = $requestData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = $this->requestData;
        return $this->view('emails.noc_request')
                    ->from('teenutc12@gmail.com',$data['name'])
                    ->subject('SMC Singapore - Marriage NOC request')  //<= how to pass variable on this subject
                    ->with([
                        'title'       => 1,
                        'content'     => 2 //this works without queue
                    ]);
    }
}
