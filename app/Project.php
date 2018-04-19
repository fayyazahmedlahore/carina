<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $fillable = [
        'contract_id','project_name','city_name','status'
    ];

    //
    public function contract()
    {
        return $this->hasMany('App\Contract');
    }
}
