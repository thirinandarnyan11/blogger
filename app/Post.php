<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Post extends Model
{
    use SoftDeletes;

    protected $fillable=['post_content','categories_id','user_id','photo','video'];

        public function comments()
    {
        return $this->hasMany('App\Comment');
    }


    protected $fillable=[
    	'post_content','photo','video','categories_id','user_id'
    ];

}
