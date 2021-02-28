<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function input(){
        return view('people_table\input');
      }

    public function result(Request $request){
        $name=$request->input('name');
        $email=$request->input('email');
        $tel=$request->input('tel');
        $age=$request->input('age');
        $address=$request->input('address');
        $birthday=$request->input('birthday');
        return view('people_table\result',compact('name','email','tel','age','address','birthday'));
      }
    public function list(){
        return view('people_table\list');
      }
}
