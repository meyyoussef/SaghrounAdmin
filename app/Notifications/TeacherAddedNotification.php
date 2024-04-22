<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TeacherAddedNotification extends Mailable
{
    use Queueable, SerializesModels;

    protected $educatrice;
    protected $password;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($educatrice, $password)
    {
        $this->educatrice = $educatrice;
        $this->password = $password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('Teacher.Mail')
                    ->with([
                        'educatrice' => $this->educatrice,
                        'password' => $this->password,
                    ]);
    }
}
