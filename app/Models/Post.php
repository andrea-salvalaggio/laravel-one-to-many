<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'post_title',
        'post_author',
        'post_image',
        'post_content',
        'post_date'
    ];
}
