<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostPrice extends Model
{
    protected $table = 'post_price';
    protected $fillable = ['posts_id', 'prices_id'];
}
