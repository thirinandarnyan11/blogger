<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\User;


class SendEmailController extends Controller
{
     
    function index(){
    }
    function send(Request $request,$id){
    	$this->validate($request,[
    		'name' => 'required',
    		'email' => 'required|email',

    	]);
    	$email = $request->email;
    	$data=array(
    		'name'=>$request->name,
    		'email' => $request->email,

    	);
    	
    	
        $user=User::find($id);
        //dd($user);
        
        $user->assignRole('blogger');

        Mail::to($email)->send(new SendMail($data));
        $user->status=0;
        $user->save();
        return back()->with('success','Accepted message arrived this blogger email');

        $role=$user->getRoleNames();
    
        return $user;

    }

   
}