<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Customers extends Mailable
{
    use Queueable, SerializesModels;

    public $email , $name , $OTP , $link;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->OTP = $data['OTP'];
        $this->link = $data['link'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.verification')
        ->subject('تأكيد عنوان البريد الإلكتروني');
    }
}
