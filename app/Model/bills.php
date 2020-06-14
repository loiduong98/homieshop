<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class bills extends Model
{
    protected $table = "bills"; 
    protected $primaryKey = "id_bills";
    protected $fillable = [
        'id_bills', 'date_order', 'total', 'payment' , 'note' , 'id_customer'
    ];
}
