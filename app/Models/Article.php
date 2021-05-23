<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body']; // добавляем возможность работать с полями таблицы

    // метод для получения комментариев
    public function comments()
    {
        return $this->hasMany(Comment::class, 'article_id', 'id');
    }
}
