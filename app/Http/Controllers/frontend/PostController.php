<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Like;
use DB;
use Auth;
use App\SavePost;
use App\Like;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts=Post::orderBy('id','desc')->get();
        return view('frontend.user',compact('posts'));
    }

    public function like($id){
       
        $user= Auth::user()->id;
        $like_user= Like::where(['user_id' => $user, 'post_id' => $id])
                    ->first();
                    // dd($like_user->user_id);
        $likes_count = Like::where('user_id', Auth::user()->id)->count();
        //dd($likes_count);
        // foreach ($like_user as $user) {
           if(!$like_user){
            $user_id= Auth::user()->id;
            $post_id= $id;
            $likes=new Like;
            $likes->user_id = $user_id;
            $likes->islike =1;
            $likes->post_id = $post_id;
            $likes->save();
            
        }
        return back();
    }

    //using ajax
    // public function like(Request $request){

    //     // $like_s = $request->like_s;
    //     $post_id = $request->post_id;

    //     $like = DB::table('likes')
    //             ->where('post_id' , $post_id)
    //             ->where('user_id', Auth::user()->id)
    //             ->first();

    //     if(!$like)
    //     {
    //         $new_like = new Like;
    //         $new_like->post_id = $post_id;
    //         $new_like->user_id = Auth::user()->id;
    //         $new_like->islike = 1;
    //         $new_like->save();
    //         $is_like = 1;
    //     }
    //     elseif ($like->islike ==1)
    //     {
    //         DB::table('likes')
    //         ->where('post_id' , $post_id)
    //         ->where('user_id', Auth::user()->id)
    //         ->delete();
    //         $is_like = 0;
            
    //     }
    //    $data= array(
    //             'is_like' => $is_like,
    //         );
    //     echo json_encode($is_like);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
       $userid=Auth::user()->id;
       $posts= SavePost::where(['user_id' => $userid, 'post_id' => $id])
                    ->orderBy('id','desc')
                    ->first();
        
           if(!$posts){

        $savepost = new SavePost;
        $savepost->user_id = $userid;
        $savepost->post_id =$id;
        
        $savepost->save();
    }
        /*$id=Auth::user()->id;
        $posts=SavePost::where('user_id',$id)->orderBy('id','desc')->get();
        */
        return view('frontend.savedpost',compact('posts'));


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $post = Post::find($id);

            return view('frontend/post/show', compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }

    // public function view($post_id){
    //     $posts = Post::where('id' ,'=' ,$post_id)->get();
    //     $likePost = Post::find($post_id);
    //     $likeCtr = Like::where(['post_id' => $likePost->id])->count();
    //     return view('frontend.user',['post' => $posts, 'likeCtr' => $likeCtr);
    // }
}
