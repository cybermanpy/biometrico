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

        $dias = $this->getDays();

        $meses = $this->getMonths();

        $user = Userinfo::findOrFail($id);

        $list_check = $user->checks->sortByDesc('checktime');

        return view('check', ['user' => $user, 'list_check' => $list_check, 'dias' => $dias, 'meses' => $meses]);
    }


    public function formCheck()
    {
        return view('formcheck');
    }

    public function getDays()
    {

        $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
        return $dias;
    }

    public function getMonths()
    {

        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        return $meses;
    }

    public function store(Request $request)
    {
    
        $dias = $this->getDays();

        $meses = $this->getMonths();

        $user = Userinfo::where('ssn', '=', $request->only(['id']))->get();

        foreach($user as $item){
            $name = $item->name;
            $a = $item->checks;
        }

        $list_check = $a->sortByDesc('checktime');

        return view('result', ['list_check' => $list_check, 'dias' => $dias, 'meses' => $meses, 'name' => $name ]);

    }

}
