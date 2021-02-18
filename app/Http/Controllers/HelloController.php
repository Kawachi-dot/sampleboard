<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function info(){
        return view('cloud9\index');
      }
    public function info2(){
        return view('cloud9\index2');
      }
    public function info3(){
        return view('cloud9\index3');
      } 
    
}
