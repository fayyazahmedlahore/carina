<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
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
