<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;


class SendEmailController extends Controller
{
     //
    function index(){
    }
    function send(Request $request){
    	$this->validate($request,[
    		'name' => 'required',
    		'email' => 'required|email',

    	]);
    	$email = $request->email;
    	$data=array(
    		'name'=>$request->name,
    		'email' => $request->email,


    	);
    	// dd($data);
    	Mail::to($email)->send(new SendMail($data));
    	return back()->with('success','Accepted message arrived this blogger email');
    }
}
