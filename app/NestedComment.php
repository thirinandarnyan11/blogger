<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class NestedComment extends Model
{
    use SoftDeletes;
    protected $fillable=['id','content','comment_id','post_id','user_id'];
}
