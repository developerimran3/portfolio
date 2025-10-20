<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['category_name', 'slug', 'photo'];

    public function post()
    {
        return $this->belongsToMany(Post::class);
    }
}
