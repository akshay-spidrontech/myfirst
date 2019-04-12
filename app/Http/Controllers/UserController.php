<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Session;

class UserController extends Controller
{
    public function index(){
    	return view('register');
    }

    public function store(Request $request){
    	 $reg = new User;
            $reg->fname = $request->fname;
            $reg->lname = $request->lname;
            $reg->email = $request->email;
            $reg->password = bcrypt($request->password);
            $reg->save();
            return redirect('/'); 
    }

    public function showlogin(){
        return view('login');
    }

    public function login(Request $request){
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            $request->session()->put('user',$request->email);
            return redirect('/');
        }else{
            return redirect()->back()->with('alert', 'Inputs wrong credential. !');
        }
    }

    public function logout(){
        //Session::flush();
        Session::forget('user');
        Auth::logout();
        return redirect('/');
    }
}
