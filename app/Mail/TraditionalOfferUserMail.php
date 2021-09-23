<?php

namespace App\Mail;

use App\Models\Offer;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TraditionalOfferUserMail extends Mailable
{
    use Queueable, SerializesModels;

    public $offer;
    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Offer $offer, User $user)
    {
        $this->offer = $offer;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.offers.submitted')
            ->subject('Traditional Offer '. $this->offer->offer_amount);
    }
}
