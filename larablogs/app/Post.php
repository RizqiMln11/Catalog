<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Post extends Model
{
    use SoftDeletes;
	protected $table = 'posts';
    protected $fillable = ['title', 'content', 'category_id', 'featured', 'slug', 'user_id'];


    public function getFeaturedAttribute($featured)
 {


 		return asset($featured);


 }

    protected $dates = ['delete_at'];


    public function category()
    {
    	return $this->belongsTo('App\category');
    }

     public function tags()
    {
    	return $this->belongsToMany('App\Tag');
    }

     public function User()
    {
        return $this->belongsTo('App\User');
    }
}
