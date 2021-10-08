<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'likes'];

    public function detail()
    {
        return $this->hasOne(PostDetail::class, 'post_id');
    }
}
