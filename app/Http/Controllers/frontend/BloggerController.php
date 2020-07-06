<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class BloggerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.createpost');
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

       $request->validate([
            'post_content' => 'required',
            'uploadFile' => 'required',

        ]);

        if($request->hasfile('uploadFile'))
        {   
            $i=1;
         
            foreach($request->file('uploadFile') as $file)
            {
                $name = time().$i.'.'.$file->extension();
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
        $post->categories_id = 1;
        $post->user_id =1;
        $post->post_content  = $request->post_content;
        $post->video= $request->video;
        $post->photo = json_encode($data);


        $post->save();

        return redirect()->route('post.index')->with('success', 'An item have been successfully added');
       
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
