<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'payment_date','payment_amount','contract_number'
    ];

    //
    public function contract()
    {
        return $this->belongsTo('App\Contract');
    }
}
