<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class price extends Model
{
    protected $table = 'prices';
	protected $fillable = [
       'harga_normal', 'harga_diskon'
    ];

}
