<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
class SendEmailController extends Controller
{
    //
    function index(){
        return view('frontend.sendemail');
    }
    function send(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        $email = $request->email;
        $data=array(
            'name'=>$request->name,
            'email' => $request->email,
            'message'=>$request->message,
        );
        // dd($data);
        Mail::to($email)->send(new SendMail($data));
        return back()->with('success','Thanks for contaction us');
    }
}