<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ChefAddedNotification extends Mailable
{
    use Queueable, SerializesModels;

    protected $chef;
    protected $password;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($chef, $password)
    {
        $this->chef = $chef;
        $this->password = $password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('Chef.Mail')
                    ->with([
                        'chef' => $this->chef,
                        'password' => $this->password,
                    ]);
    }
}
