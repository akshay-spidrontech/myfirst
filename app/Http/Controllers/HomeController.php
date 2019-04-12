<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
use App\Signup;
use App\Employee;

class HomeController extends Controller
{
    public function index(){
    	$a=10;
    	$b=20;
    	$sum = $a + $b;
    	return view('welcome',compact('sum'));
    }
    public function destroy($id) {
		DB::delete('delete from todo_lists where id = ?',[$id]);
		return redirect('todo');
	}
    public function generatePDF(){
        $data = ['title' => 'Akshay Chavan'];
        $pdf = PDF::loadView('myPDF', $data);
  
        return $pdf->download('test.pdf');
    }
    public function manyRelation(){
        $role = Employee::find(2)->roles;
        dd($role);
    }
    public function showLocalization(){
        return view('localization');
    }

    
}
