<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type_products extends Model
{
    protected $table = "products_type"; 
    protected $fillable = [
        'id', 'name', 'description', 'image'
    ];
}
