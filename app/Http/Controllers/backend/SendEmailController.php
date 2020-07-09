<?php
<<<<<<< HEAD

namespace App\Http\Controllers\backend;

=======
namespace App\Http\Controllers\backend;
>>>>>>> 8aa74faf63fbe7b414b730217a0c279ac3d7d496
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\User;
<<<<<<< HEAD


class SendEmailController extends Controller
{
     
=======
class SendEmailController extends Controller
{
     //
>>>>>>> 8aa74faf63fbe7b414b730217a0c279ac3d7d496
    function index(){
    }
    function send(Request $request,$id){
    	$this->validate($request,[
    		'name' => 'required',
    		'email' => 'required|email',
<<<<<<< HEAD

=======
>>>>>>> 8aa74faf63fbe7b414b730217a0c279ac3d7d496
    	]);
    	$email = $request->email;
    	$data=array(
    		'name'=>$request->name,
    		'email' => $request->email,
<<<<<<< HEAD

    	);
    	
    	
        $user=User::find($id);
        //dd($user);
        
        $user->assignRole('blogger');

=======
    	);
        $user=User::find($id);
        //dd($user);
        $user->assignRole('blogger');
>>>>>>> 8aa74faf63fbe7b414b730217a0c279ac3d7d496
        Mail::to($email)->send(new SendMail($data));
        $user->status=0;
        $user->save();
        return back()->with('success','Accepted message arrived this blogger email');
<<<<<<< HEAD

        $role=$user->getRoleNames();
    
        return $user;

    }

   
}
=======
        $role=$user->getRoleNames();
        return $user;
    }
}
>>>>>>> 8aa74faf63fbe7b414b730217a0c279ac3d7d496
