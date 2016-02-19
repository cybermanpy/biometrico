<?php

namespace biometrico\Http\Controllers;

use biometrico\Userinfo;
use biometrico\Checkinout;

class CheckController extends Controller
{
    
    public function show($id)
    {

    	$checks = Checkinout::findOrFail($id);

		return view('check', ['checks' => $checks ]);
    }
}
