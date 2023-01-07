<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    public $upload_folder;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $upload_folder)
    {
        $this->data = $data;
        $this->upload_folder = $upload_folder;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Request for translation services")
                    ->view('emails.testMail')
                    ->with('data', $this->data)
                    ->attach($this->upload_folder);
                    

 

    }
}
