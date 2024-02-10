<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tag extends Model
{
    use HasFactory;

    public function posts()
    {
        return $this->belongsToMany(Post::class,'post_tags','tag_id','post_id');
    }
}
