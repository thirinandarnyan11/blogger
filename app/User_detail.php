<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class User_detail extends Model
{
    use SoftDeletes;
    protected $fillable=['user_id','cover_photo','profile','phone','address','dob'];

     public function user(){
	return $this->belongsTo('App\User');

	}
	
}
