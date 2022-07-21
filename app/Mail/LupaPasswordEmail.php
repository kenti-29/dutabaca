<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class LupaPasswordEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($passwordbaru)
    {
        $this->passwordbaru=$passwordbaru;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('Dutabaca@gmail.com')
                    ->view('pages.auth.email')
                    ->with(
                        [
                            'passwordbaru'=>$this->passwordbaru
                        ]
                        );
    }
}
