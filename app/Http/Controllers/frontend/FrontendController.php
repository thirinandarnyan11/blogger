<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Role;
use App\User;
use App\Post;
use App\SavePost;
use Auth;

class FrontendController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth')->only('user');
    }

    function index()
<<<<<<< HEAD
    {         
=======

    {  
        $users=User::role('blogger')->get();
>>>>>>> 8aa74faf63fbe7b414b730217a0c279ac3d7d496
        $posts=Post::orderBy('id','desc')->get();
    	return view('frontend.user',compact('posts','users'));
    }
    function video_show(){
    	return view('frontend.video');
    }
    function saved_video(){
    	return view('frontend.savedvideo');
    }
    
    function saved_post(){
        $id=Auth::user()->id;
                    // dd($like_user->user_id);
        
        $posts=SavePost::where('user_id',$id)->orderBy('id','desc')->get();
        
    	return view('frontend.savedpost',compact('posts'));
    }
    function blogger_content(){
        $id=Auth::user()->id;
        $user=User::find($id);
        $post=Post::where('user_id',$id)->orderBy('id','desc')->get();
        return view('frontend.blogger',compact('post','user'));
    }

    function userprofile(){
        $id=Auth::user()->id;
        $user=User::find($id);
        $post=Post::where('user_id',$id)->orderBy('id','desc')->get();
        return view('frontend.userprofile',compact('post','user'));
    }

    public function requestblogger($id){
        $user=User::find($id);
        $user->status=1;
        $user->save();

        return back();
    }
}
