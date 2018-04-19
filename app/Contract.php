<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{

    protected $fillable = [
        'contractor_name','contractor_number','date_of_contract','contract_amount','country_name','coordenates','progress'
    ];

    //
    public function payments()
    {
        return $this->hasMany('App\Payment');
    }

    public function projects()
    {
        return $this->hasMany('App\Project');
    }
}
