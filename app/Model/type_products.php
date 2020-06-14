<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class type_products extends Model
{
    protected $table = "type_products"; 
    protected $primaryKey = "id_typeproduct";
    protected $fillable = [
        'id_typeproduct', 'name', 'description', 'image'
    ];
}
