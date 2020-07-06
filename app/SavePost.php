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
}
