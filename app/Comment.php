<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Comment extends Model
{
	use SoftDeletes;
    protected $fillable=['id','content','post_id','user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

       

}
