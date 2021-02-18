<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController2 extends Controller
{
  //Homework1-1
    public function score(){
        return view('homework1-1\score');
      }    
    public function scoreresult(Request $request){
      $score=$request->input('score');

      return view('homework1-1\scoreresult')->with([
        'score'=>$score
      ]);
    }

  //Homework1-2
    public function value_input(){
      return view('homework1-2\value_input');
    }  
    public function value_sum(Request $request){
      $value=$request->input('value');
      return view('homework1-2\value_sum')->with([
          "value"=>$value
      ]);
    }  

  //Homework1-3
    public function id_input(){
      return view('homework1-3\id_input');
    }
    public function id_result(Request $request){ 
      $id=$request->input('id');
      return view('homework1-3\id_result')->with([
        "id"=>$id,
      ]);
    }  
}
