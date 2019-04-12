<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Signup;

class SignupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('signup');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('imagename')){
            $image = $request->file('imagename');
            $name = time().'.'.$image->getClientOriginalExtension();

            $destinationPath = public_path('/uploads');
            $image->move($destinationPath, $name);
        }
        $file = new Signup;
        $file->name = $request->name;
        $file->email = $request->email;
        $file->mobile = $request->mobile;
        $file->city = $request->city;
        $file->imagename = $name;
        $file->save();
        return redirect('showsignup'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Signup::find($id);
        return view('showSignData',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function showapi(){
       $data = Signup::all();
       return $data;
    }
    public function postapidata(Request $request){
        $data = new Signup;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->city = $request->city;
        //$file->imagename = $name;
        $result = $data->save();
        if($result == 1){
            return 'Record is inserted.';
        }else{
             return 'Record is not inserted.'; 
        }


    }
   
}
