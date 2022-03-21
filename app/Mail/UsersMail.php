<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UsersMail extends Mailable
{
    use Queueable, SerializesModels;

    public $infoUsuario;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($datauser)
    {
        $this->infoUsuario = $datauser;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Esto es una prueba de correo')->view('emails.usersMail');
    }
}
