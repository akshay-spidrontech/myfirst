<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Signup;


class SignupDataController extends Controller
{
    public function index(){
    	$signup_data = Signup::all();
    	return view('signupdata',compact('signup_data'));
    } 

}
