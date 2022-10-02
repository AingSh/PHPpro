<?php

namespace Hillel\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //title
    //slog

    public function posts()
    {
        return $this->hasMany(Post::class, 'category_id');// ко многим и связь между таблицами
    }
}