<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    //для безпеки
    protected $fillable = [
        'title',
        'body',
        'published_at',
        'user_id' // temporary
    ];

    protected $dates = ['published_at']; //для того щоб laravel розумів, що це екземпляр Carbon

    public function scopePublished($query) //нова область запиту
    {
        $query->where('published_at', '<=', Carbon::now()); //добавлення першої області
    }

    public function scopeUnPublished($query) //для отримання статті яка буде добавленна в майбутньому
    {
        $query->where('published_at', '>', Carbon::now()); 
    }

    public function setPublishedAtAttribute($date) //мутатор
    {
        $this->attributes['published_at'] = Carbon::parse($date);
    }

    //Користувача до поста(підключення)
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
