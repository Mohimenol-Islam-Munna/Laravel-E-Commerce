<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class passwordReset extends Mailable
{
    use Queueable, SerializesModels;

   
    public function __construct()
    {
        
    }

    
    public function build()
    {
        return $this->view('emails.resetpassword');
    }
}
