<?php

namespace biometrico\Http\Controllers;

use biometrico\Userinfo;
use biometrico\Checkinout;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;

class CheckController extends Controller
{
    
    // public function show($id)
    // {

    // 	$checks = Checkinout::findOrFail($id);

  		// return view('check', ['checks' => $checks ]);

    // }

    public function show($id)
    {
    	// $users = Userinfo::findOrFail($id);
        $users = Userinfo::findOrFail($id);

        $list = $users->checks->sortby('checktime');

        return view('check', ['users' => $users, 'list' => $list]);
    }


    public function formCheck()
    {
        return view('formcheck');
    }

    public function store(Request $request)
    {
        $id = $request->only(['id']);

        $users = Userinfo::findOrFail($id);

        // dd($users);

        // $list = $users->checks->sortby('checktime');

        return view('check', ['users' => $users]);

    }

}
