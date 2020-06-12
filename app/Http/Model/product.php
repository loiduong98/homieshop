<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = "product";
    protected $fillable = [
        'id', 'name', 'id_type', 'description' , 'unit_price', 'promotion_price', 'image', 'unit', 'new'
    ];
}
