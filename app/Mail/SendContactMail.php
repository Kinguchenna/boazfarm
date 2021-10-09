<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

   public  $usermail;
   public  $username;
   public  $subject;
   public  $message;
    public function __construct($usermail,$username,$subject,$message)
    {
               $this->usermail = $usermail;
               $this->username = $username;
               $this->subject   = $subject;
               $this->message   = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

           $usermail = $this->usermail;
            $username = $this->username;
            $subject   = $this->subject;
            $message   = $this->message;

        return $this->markdown('frontend.sendcontactmail', compact("usermail","username","subject","message"))->from('boazcity.adm@gmail.com', 'Boazcity')->subject('Enquiry From User ');
    }
}
