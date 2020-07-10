<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\Post;
use App\Like;
use DB;
use App\SavePost;



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

    public function editshow($id){
        $categories=Category::all();
        $post=Post::find($id);
        return view('frontend.editpost',compact('categories','post'));
    }

   public function like(Request $request){

        // $like_s = $request->like_s;
        $post_id = $request->post_id;
        //dd($post_id);

        $like = DB::table('likes')
                ->where('post_id' , $post_id)
                ->where('user_id', Auth::user()->id)
                ->first();

        if(!$like)
        {
            $new_like = new Like;
            $new_like->post_id = $post_id;
            $new_like->user_id = Auth::user()->id;
            $new_like->islike = 1;
            $new_like->save();
            $is_like = 1;
        }
        elseif ($like->islike ==1)
        {
            DB::table('likes')
            ->where('post_id' , $post_id)
            ->where('user_id', Auth::user()->id)
            ->delete();
            $is_like = 0;
            
        }
        $data= array(
                'likes' => $post_id,
                'is_like' => $is_like,
            );
      echo json_encode($data);
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
        return back()->with('save','You saved this post');

        }
        /*$id=Auth::user()->id;
        $posts=SavePost::where('user_id',$id)->orderBy('id','desc')->get();
        */
        else{
            return back()->with('save','You saved this post!So this post does not need to save');
        }


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
    public function bloggershow($id)
    {
            $post = Post::find($id);

            return view('frontend/post/bloggershow', compact('post'));

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
         //validation
       $userid=Auth::user()->id;

        $request->validate([
            'category_id' => 'required',

            'post_content'=> 'required',
            
        ]);
        $old=$request->oldphoto;

        if ($request->hasFile('photo')) {

           $files=$request->file('photo');
           $i=1;
                foreach($files as $img)
                {
                   $name = time().$i.'.'.$img->getClientOriginalExtension();

                    $img->move(public_path('images/post'), $name);
                    $data[] = 'images/post/'.$name;
                    $i++;

                }

            $data=json_encode($data);
            // unlink($old);
            /*$decold=json_decode($old);
            foreach($decold as $dc)
            {
                unlink($dc);
            }*/
        }
        else
        {
            $data=$request->oldphoto;
        }

        //Data insert
        $post = Post::find($id);
        $post->categories_id = $request->category_id;
        $post->post_content  = $request->post_content;
        $post->photo=$data;
        $post->user_id =$userid;
       
        
        $post->save();

        //return
        return redirect()->route('blogger')->with('success', 'Post Update  successfully');
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
