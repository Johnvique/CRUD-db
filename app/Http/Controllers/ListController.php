<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sample;

class ListController extends Controller
{
    public function Record(){
        $results=sample::all();
    	return view('Records.Record',compact('results'));
    }
    public function poststore(Request $request){
    	$sample =new sample();
    	$sample->title = $request->title;
    	$sample->body = $request->body;
    	$sample->save();
    	return redirect()->back();

    }
}
