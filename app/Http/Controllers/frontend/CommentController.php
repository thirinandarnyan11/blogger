<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Comment;
use App\NestedComment;
use App\Post;
use App\User;
use Auth;
class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
                $comment = new Comment;
        $comment->content = $request->get('comment_body');
        $comment->user()->associate($request->user());
        $post = Post::find($request->get('post_id'));
        $post->comments()->save($comment);

        return back();

    }

        public function replyStore(Request $request,$id)
    {
        $reply = new NestedComment();
        $reply->content = $request->get('comment_body');
        $reply->user_id=Auth::user()->id;
        $reply->comment_id = $request->get('comment_id');
        $reply->post_id = $request->get('post_id');
        $reply->save();
        $reply->replies()->save($reply);
        $userid=Auth::user()->id;
       $replies= NestedComment::where(['user_id' => $userid, 'post_id' => $id])
                    ->orderBy('id','desc')
                    ->get();
            $post = Post::find($id);

       
        return view('frontend.post.show',compact('replies','post'));

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
