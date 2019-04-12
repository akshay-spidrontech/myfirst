<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendMail;
use App\Email;

class MailController extends Controller
{
    
    public function send(Request $request){
    	$data =new Email();
    	$data->to = $request->to;
    	$data->message = $request->message;
    	$data->save();
    	Mail::send(new SendMail());
    	return redirect()->back()->with('alert', 'Mail sent successfuly !');
    }

    public function email(){
    	return view('emailform');
    }
    
}
