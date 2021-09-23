<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'offer_amount',
        'currency',
        'currency_amount',
        'exchange_rate',
        'offer_type',
        'outcome',
        'details'
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'listing_offers';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
