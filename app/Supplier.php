<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'business_name','phone_number','email','contact_person_name'
    ];
}
