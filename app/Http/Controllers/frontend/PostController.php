<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Like;
use Auth;
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
                    ->get();
        if(empty($like_user->user_id)){
            $user_id= Auth::user()->id;
            $post_id= $id;
            $likes=new Like;
            $likes->user_id = $user_id;
            $likes->islike =1;
            $likes->post_id = $post_id;
            $likes->save();

            // return view('frontend.user',compact('likes'));
            return back();
        }
       
    }
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
    public function store(Request $request)
    {
        //
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
        //
    }
}
