<?php

namespace biometrico\Http\Controllers;

use biometrico\Userinfo;
use biometrico\Checkinout;

class HomeController extends Controller
{

	public function index()
	{
		$checks = Checkinout::All();

		return view('home', ['checks' => $checks ]);
	}

	public function guardarUsuario()
	{
		//
	}
}