<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
	protected $table = 'categories';
    protected $fillable = ['name', 'gambar'];


    public function posts()
    {
    	return $this->hasMany('App\post');
    }
}
