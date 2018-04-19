<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    public function contract()
    {
        return $this->belongsTo('App\Contract');
    }
}
