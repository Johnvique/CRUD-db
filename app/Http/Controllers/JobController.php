<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog;

class JobController extends Controller
{ 
    public function train(){
    	return view('Train.train');
    }
     public function resultstore(Request $request){
    	$job =new blog();
    	$job->username= $request->username;
    	$job->first_name= $request->first_name;
    	$job->last_name= $request->last_name;
    	$job->email= $request->email;
    	$job->dob= $request->dob;
    	$job->password= $request->password;
    	$job->save();
    	return redirect()->back();
    }      
}
