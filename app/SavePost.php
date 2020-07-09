<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class SavePost extends Model
{
    use SoftDeletes;
    
    protected $fillable=[
    	'id','post_id','user_id'
    ];

      public function post(){
	return $this->belongsTo('App\Post');
	}

    public function user(){
    return $this->belongsTo('App\User');
    }

}
