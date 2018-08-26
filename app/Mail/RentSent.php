<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RentSent extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($title, $text, $text2)
    {
        //
        $this->title = $title;
        $this->text = $text;
        $this->text2 = $text2;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->text('emails.sample_notification_plain')
            ->subject($this->title)
            ->with([
                'text' => $this->text,
                'text2' => $this->text2,
            ]);
    }
}
