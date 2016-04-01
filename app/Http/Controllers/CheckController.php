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
        $meses = $this->getMonths();
        return view('formcheck', ['meses' => $meses]);
    }

    public function formCheck1()
    {
        return view('form');
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

    // public function getDate($value,$a)
    // {
    //     if( $value == "Enero")
    //     {
    //         return $list_check = $a->filter(function ($item, $mes){
    //             return $item->checktime > "2016-01-01 06:00:00" && $item->checktime < "2016-02-01 06:00:00";
    //         })->sortByDesc('checktime');

    //     }

    //     if( $value == "Febrero")
    //     {
    //         return $list_check = $a->filter(function ($item, $mes){
    //             return $item->checktime > "2016-02-01 06:00:00" && $item->checktime < "2016-03-01 06:00:00";
    //         })->sortByDesc('checktime');

    //     }

    //     if( $value == "Marzo")
    //     {
    //         return $list_check = $a->filter(function ($item, $mes){
    //             return $item->checktime > "2016-03-01 06:00:00" && $item->checktime < "2016-04-01 06:00:00";
    //         })->sortByDesc('checktime');

    //     }
       
    // }

    public function store(Request $request)
    {

        $data = $request->all();
    
        $dias = $this->getDays();

        $meses = $this->getMonths();

        $user = Userinfo::where('ssn', '=', $data['id'])->get();

        foreach($user as $item)
        {
                $name = $item->name;
                $a = $item->checks;
        }

        $n = collect([]);

        $s = array();

        foreach ($a as $key => $value)
        {
            if($key == 0)
            {
                $s[]['Entrada'] = $value->checktime;
            }

            if ($meses[date('n', strtotime($value->checktime))-1] == $data['month'])
            {
                $n->push($value->checktime)->groupBy($value->checktime);
            }
        }

        // dd($s);

        // $list_check = $this->getDate($data['month'], $a);

        // $list_check = $n->sortByDesc('key');

        $list_check = $a->sortByDesc('checktime');

        return view('result', ['list_check' => $list_check, 'dias' => $dias, 'meses' => $meses, 'name' => $name, 'n' => $n ]);

    }

    public function store1(Request $request)
    {
    
        $dias = $this->getDays();

        $meses = $this->getMonths();

        $user = Userinfo::where('ssn', '=', $request->only(['id']))->get();

        $marcacion = array();

        foreach($user as $item)
        {
            $name = $item->name;
            $a = $item->checks;
        }

        foreach ($a as $check)
        {

            if (date('H:I:S', strtotime($check->checktime)) <= '09:00:00')
            {
                $marcacion['entrada'][] = $check->checktime ;
            }

            if (date('H:I:S', strtotime($check->checktime)) >= '15:00:00')
            {
                $marcacion['salida'][] = $check->checktime ;
            }

        }

        $collection = Collection::make($marcacion);

        return view('result1', ['collection' => $collection, 'dias' => $dias, 'meses' => $meses]);

    }
}
