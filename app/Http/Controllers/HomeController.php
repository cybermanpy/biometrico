<?php

namespace biometrico\Http\Controllers;


use biometrico\Userinfo;
use biometrico\Checkinout;


class HomeController extends Controller
{

	public function index()
	{
 
		$users = Userinfo::all()->sortBy('badgenumber');		

		return view('home', ['users' => $users]);
	}


}