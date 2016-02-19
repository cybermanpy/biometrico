<?php

namespace biometrico\Http\Controllers;

use Illuminate\Http\Request;

use biometrico\Http\Requests;

class CheckController extends Controller
{
    
    public function index()
    {

    	return view('check');
    }
}
