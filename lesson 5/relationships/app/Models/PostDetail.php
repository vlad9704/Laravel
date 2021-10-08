<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostDetail extends Model
{
    use HasFactory;

    protected $fillable = ['full_description', 'post_id'];

    protected $table = 'post_details';
}
