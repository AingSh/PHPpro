<?php

namespace Hillel\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    public function category()
    {
        return $this->belongsTo(Category::class);// к конкретной категории относится
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();// к конкретной категории относится
    }

}