<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\frs;

class Registration extends Controller
{
    public function showForm(){
    	return view('Form');
    }
    public function reg(Request $request){
    	echo $request;
    	$student = new frs;
    	$student->Name = $request->Name;
    	$student->Age = $request->Age;
    	$student->StudentNumber=$request->StudentNumber;
    	$student->Course=$request->Course;
    	$student->Email = $request->Email;
    	$student->save();
    	return redirect('/List');
    }
    public function showlist(){
    	$unique = frs::orderBy('id')->get();
        return view('List',['unique'=>$unique]);
    }
    public function edit($id){
        $student = frs::find($id);
        return view('edit',['unique'=>$student]);

    }
    public function editing(Request $request,$id){
        echo $request;
        $student = frs::find($id);
        $student->Name = $request->Name;
        $student->Age = $request->Age;
        $student->StudentNumber=$request->StudentNumber;
        $student->Course=$request->Course;
        $student->Email = $request->Email;
        $student->save();
        return redirect('/List');
    }

    public function delete(Request $request,$id){
        echo $request;
        $student = frs::find($id);
        $student->delete();
        return redirect('/List');
    }

    public function add(Request $request,$id){
        $student = frs::find($id);
        return view('add',['unique'=>$student]);
        
    }

    public function adding(Request $request,$id){
        $id = $request->id;
        $Name = $request->Name;
        $Age = $request->Age;
        $StudentNumber = $request->StudentNumber;
        $Course = $request->Course ;
        $Email = $request->Email;

        $student = new frs;
        $student->Name = $request->Name;
        $student->Age = $request->Age;
        $student->StudentNumber=$request->StudentNumber;
        $student->Course=$request->Course;
        $student->Email = $request->Email;
        $student->save();
        return redirect('/List');
    }
}


