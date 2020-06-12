<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    protected $table = "bill"; 
    protected $fillable = [
        'id', 'date_order', 'total', 'payment' , 'note' , 'id_customer'
    ];
}
