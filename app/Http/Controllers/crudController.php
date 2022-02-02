<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\crud;
use Session;
class crudController extends Controller
{
   public function showData(){
       return view('show_data');
   }
   public function addData(){
       return view('add_data');
   }
   public function storeData(Request $request){
     $ruls=[
        'name' => 'required|max:100',
        'email' => 'nullable|email|max:100', 
     ];
    $cm=[
        'name.required'=>'enter your name---',
        'name.max'=>'more then 10 ch----',
        'email.email'=>'enter your email---',
        'emal.max'=>'email not valid------',
    
    ];
     $this->validate($request,$ruls,$cm);
     $crud=new crud();
     $crud->name=$request->name;
     $crud->email=$request->email;
     $crud->save();
     Session::flash('msg','Data successfully add');
     return redirect()->back();


   }
}
 