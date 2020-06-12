<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table = "customer";
    protected $fillable = [
        'id', 'name', 'gender', 'email' , 'address', 'phone_number', 'note'
    ];
}