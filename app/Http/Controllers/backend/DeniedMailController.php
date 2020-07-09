<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DeniedMail;
use App\User;

class DeniedMailController extends Controller
{
     function denied(Request $request,$id){
      
        $user=User::find($id);

        $email = $user->email;
        $data=array(
            'name'=>$user->name,
            'email' => $user->email,

        );
        

        Mail::to($email)->send(new DeniedMail($data));
        $user->status=0;
        $user->save();
        return back()->with('success','Accepted message arrived this blogger email');

        return $user;

    }
}
