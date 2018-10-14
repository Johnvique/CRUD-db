<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SamplesController extends Controller
{
	public function origin(){
		return view('Samples.staff');
	}

}