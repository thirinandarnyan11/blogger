<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Role;

class FrontendController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth')->only('user');
    }

    function index()
    {
    	return view('frontend.user');
    }
    function video_show(){
    	return view('frontend.video');
    }
    function saved_video(){
    	return view('frontend.savedvideo');
    }
    function saved_post(){
    	return view('frontend.savedpost');
    }
    function blogger_content(){
        return view('frontend.blogger');
    }
}
