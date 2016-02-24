<?php

namespace biometrico\Http\Controllers;

use biometrico\Userinfo;
use biometrico\Checkinout;

class HomeController extends Controller
{

	public function index()
	{
		$users = Userinfo::All();


		return view('home', ['users' => $users ]);
	}


}