<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ServiceFormMail extends Mailable
{
    use Queueable, SerializesModels;

private $formData = [];

/**
 * Create a new message instance.
 *
 * @param  array  $formData
 * @return void
 */
public function __construct(array $formData)
{
    $this->formData = $formData;
}

/**
 * Build the message.
 *
 * @return $this
 */
    public function build()
    {
        return $this->from('crowdplayabuja@gmail.com', 'CrowdPlay Service')
            ->subject($this->formData['subject'] ?? 'Service Form Submission') // Use the 'subject' key from the form data, or fallback to a default subject
            ->view('service')
            ->with('formData', $this->formData);
    }
}
