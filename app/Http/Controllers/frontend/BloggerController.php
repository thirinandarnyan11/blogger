<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Category;
use Auth;

class BloggerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();
        return view('frontend.createpost',compact('categories'));
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
       $id=Auth::user()->id;
       $request->validate([
            'post_content' => 'required',
            'uploadFile' => 'required',
        ]);

       $files=$request->file('uploadFile');
        if(count($files)>0)
        {   

            $i=1;
            foreach($files as $file)
            {
                $name = time().$i.'.'.$file->getClientOriginalExtension();

                $file->move(public_path('images/post'), $name);
                $data[] = 'images/post/'.$name;
                $i++;
 
            }
        }
         if($request->hasfile('updateVideo'))
        {   
            foreach($request->file('updateVideo') as $videofile)
            {
                $name = time().'.'.$file->extension();
                $videofile->move(public_path('videos/'), $name);  
                $video = 'videos/'.$name;
            }
        }
        $post = new Post;
        $post->categories_id = $request->category_id;
        $post->user_id =$id;
        $post->post_content  = $request->post_content;
       /* $post->video= $request->video;*/
        $post->photo = json_encode($data);
        $post->save();
        return redirect()->route('blogger')->with('success', 'An item have been successfully added');
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
