<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class JoinQuery extends Controller
{
    public function index(){
    	return view('joinQuery');
    	
    }
    public function exQuery(){
        return $data= DB::table('employees')
	    	->join('passports','passports.employee_id' ,"=","employees.id")
	    	->join('addresses',"addresses.passport_id","=","passports.id")
	    	->get()
	    	->toArray();
    }
}
