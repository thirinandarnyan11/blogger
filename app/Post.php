<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Post extends Model
{
    use SoftDeletes;
    protected $fillable=[
    	'post_content','photo','video','categories_id','user_id'
    ];
}
