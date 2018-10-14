<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\teacher;

class StudentController extends Controller
{
    public function marks(){
    	$result=teacher::all();
    	return view('Exam.marks',compact('result'));

    }
    public function poststore(Request $request){
    	$teacher =new teacher();
    	$teacher->user = $request->user;
    	$teacher->dob = $request->dob;
    	$teacher->phone = $request->phone;
    	$teacher->email = $request->email;
    	$teacher->pass = $request->pass;
    	$teacher->save();
    	return redirect()->back();
  }
  public function result(){
    $students=teacher::all();
    return view('Exam.admin',compact('students'));
  }
  public function delete($id){
    $student=teacher::findorFail($id);
    $student->delete();
    return redirect()->back();
  }
} 