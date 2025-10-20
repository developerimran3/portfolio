<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = ['post_id', 'file_name'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
