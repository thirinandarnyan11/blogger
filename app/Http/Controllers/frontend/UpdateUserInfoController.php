<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User_detail;
use App\User;
use App\Post;
use Auth;


class UpdateUserInfoController extends Controller
{
    public function update(Request $request, $id)
    {
        //validation
        $request->validate([
            'dob'=>  'required',
            'address'=> 'required',
            'phone'=>'required'
        ]);
        
        //Data insert
        $userdetail=User_detail::find($id);
        $userdetail->dob=$request->dob;
        $userdetail->address=$request->address;
        $userdetail->phone=$request->phone;

        $userdetail->save();
        //return
        return back();
    }
    public function updateprofile(Request $request, $id)
    {
        //validation
        $request->validate([
            'profile'=> 'sometimes|mimes:jpeg,bmp,png'
        ]);
        //File Upload
            $old= $request->oldProfile;

        if($request->hasFile('profile')){
            
              if($old=='avatar.png'){
            }
            else{
                unlink($old);
            }
             $imageName=time().'.'.$request->profile->extension();
            
            $request->profile->move(public_path('images/user'),$imageName);
            $filepath='images/user/'.$imageName;

        }
       else{
        $filepath=$request->oldProfile;
       }
        //Data update
       $userdetail=User_detail::find($id);
        $userdetail->profile=$filepath;
        
        $userdetail->save();
        //return
        return back();
        
    }
    public function updatecover(Request $request, $id)
    {
        //validation
        $request->validate([
            'cover_photo'=> 'sometimes|mimes:jpeg,bmp,png'
        ]);
        //File Upload
            $old= $request->oldcover;
        if($request->hasFile('cover_photo')){
            
              if($old=='avatar.png'){
            }
            else{
                unlink($old);
            }
             
             $imageName=time().'.'.$request->cover_photo->extension();
            
            $request->cover_photo->move(public_path('images/user'),$imageName);
            $filepath='images/user/'.$imageName;

        }
       else{
        $filepath=$request->oldcover;
       }
        //Data update
       $userdetail=User_detail::find($id);
        $userdetail->cover_photo=$filepath;
        
        $userdetail->save();
        //return
        return back();
        
    }



}
