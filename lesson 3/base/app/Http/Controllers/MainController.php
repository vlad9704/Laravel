<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
    Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index() {

        // dd() - распечатать объект
        DB::enableQueryLog(); // включили запись запросов БД

        $arShips = DB::table('ships')->get();
        //dd($arShips);
        //dd(DB::getQueryLog()); // показать логи

        return view('index', compact('arShips'));
    }

    public function ship($name) {

        DB::enableQueryLog(); // включили запись запросов БД

        //$ship = DB::table('ships')->get();
        $ship = DB::table('ships')->where('name', '=', $name)->first();
        //$ship = DB::table('ships')->find($id);

        //dd($ship);
        //dd(DB::getQueryLog());

        return view('ship', compact('ship'));
    }

}

