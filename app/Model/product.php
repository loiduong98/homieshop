<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = "products";
    protected $primaryKey = "id_product";
    protected $fillable = [
        'id_product', 'name', 'id_type', 'description' , 'unit_price', 'promotion_price', 'image', 'unit', 'new'
    ];
}
