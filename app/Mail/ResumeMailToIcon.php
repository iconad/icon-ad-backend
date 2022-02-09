<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class ResumeMailToIcon extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $mailData;

    public function __construct($mailData)
    {
        $this->mailData = $mailData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $input = array(
            'data'     => $this->mailData['data'],
            'path'     => $this->mailData['path'],
            'extenstion'     => $this->mailData['extenstion']
        );

        return $this->view('emails.resume_email_to_icon')

        ->attach( storage_path('app/public/'.$input['path']), [
            'as' => 'resume.'.$input['extenstion'],
        ])
        ->with([
            'data' => $input['data'],
        ]);
    }
}
