<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bill_detail extends Model
{
    protected $table = "bill_detail";
    protected $fillable = [
        'id_billdetail', 'id_bill', 'id_product', 'quantity' , 'unit_price'
    ];
}