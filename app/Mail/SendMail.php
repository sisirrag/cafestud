<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\user;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $fee;

    
    public function __construct($fee)
    {
        $this->fee = $fee;

    }

    
    public function build()
    {
        return $this->subject('Fee Payment Status')->view('sendmail');
    }
}
