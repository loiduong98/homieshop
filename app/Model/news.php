<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $table = "news";
    protected $primaryKey = "id_news";
    protected $fillable = [
        'id_news', 'title', 'content', 'image'
    ];
}
