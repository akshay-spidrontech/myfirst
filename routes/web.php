<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','HomeController@index');
Route::resource('todo','TodoController');
Route::resource('signup','SignupController');
Route::get('showsignup','SignupDataController@index');
Route::resource('addemployee','EmployeeController');
Route::get('showemployee','EmployeeController@showEmp');

Route::post('send','MailController@send');
Route::get('email','MailController@email');
Route::get('register','UserController@index')->middleware('AuthLogin');
Route::post('storereg','UserController@store');
Route::get('showlogin','UserController@showlogin')->middleware('AuthLogin');
Route::post('login','UserController@login');
Route::get('logout','UserController@logout');

Route::get('generate-pdf','HomeController@generatePDF');
Route::get('joinquery','JoinQuery@index');
Route::get('joins','JoinQuery@exQuery');
Route::get('many','HomeController@manyRelation');
//Route::get('localization','HomeController@showLocalization');
Route::get('localization/{lang}',function($lang){
	App::setlocale($lang);
	return view('localization');
});
?>