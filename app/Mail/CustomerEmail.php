<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CustomerEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $customer;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($customer)
    {
        $this->customer = $customer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        /*if(count($this->customer->email) && count($this->customer->name)) {
            return $this->from($this->customer->email, $this->customer->name)
                ->subject($this->customer->mission)
                ->view('emails.customers');
        }*/
        return $this->view('emails.customers')
            ->subject($this->customer->mission);
    }
}
