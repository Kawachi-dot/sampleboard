<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PeopleController extends Controller
{   
    public function input(){
        return view('people_table\input');
      }

    public function result(Request $request){
        $person = new Person;
        $person->name = $request->name;
        $person->email = $request->email;
        $person->tel = $request->tel;
        $person->age = $request->age; 
        $person->address = $request->address;
        $person->birthday = $request->birthday;
        $person->save();

        $name=$request->input('name');
        $email=$request->input('email');
        $tel=$request->input('tel');
        $age=$request->input('age');
        $address=$request->input('address');
        $birthday=$request->input('birthday');
        return view('people_table\result',compact('name','email','tel','age','address','birthday'));
      }
    public function list(){
        $people = Person::all();

       /* dd($people);
        $person = Person::find(1);
        dd($person);
        //$person = Person::first();
        //$person = Person::where('address','kyoto')->first();
        $people = Person::where('address','kyoto')->get();

        dd($people);*/
        return view('people_table\list',compact('people'));
      }
      
      public function edit($user_id){
        $person= Person::find($user_id);
          return view('people_table\edit',compact('person'));
        }
      
      public function update(Request $request,$user_id){
               $update=Person::find($user_id);
               $update->name = $request->name;
               $update->email = $request->email;
               $update->tel = $request->tel;
               $update->age = $request->age;
               $update->address = $request->address;
               $update->birthday = $request->birthday;
               $update->save();
          return view('people_table\update');
        }
        
        public function delete(Request $request){
          $delete=Person::find($request->user_id);
          $delete->delete();
          
          return view('people_table\delete');
        }
}
