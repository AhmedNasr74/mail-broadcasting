<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class NewsLetterMail extends Mailable
{
    public $content;

    public function __construct(string $subject , string $content)
    {
        $this->subject = $subject;
        $this->content = $content;
    }

    public function build()
    {
        return $this->view('emails.news-letter');
    }
}
