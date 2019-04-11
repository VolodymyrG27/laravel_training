<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //для безпеки
    protected $fillable = [
        'title',
        'body',
        'published_at'
    ];
}
