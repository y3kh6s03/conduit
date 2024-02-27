<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    use HasFactory;

    public function post(){
        return $this->belongsTo(Post::class, 'post_id', 'post');
    }
    public function tag(){
        return $this->belongsTo(Tag::class, 'tag_id', 'tag');
    }
}
