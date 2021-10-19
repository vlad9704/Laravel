<?php

namespace App\Http\Controllers;

use App\Models\Ship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{

    public function index()
    {

        $ships = Ship::where('id', '<=', 6)->get();

        return view('index', compact('ships'));

    }

    public function shipsList()
    {

        $ships = DB::table('ships')->paginate(9);

        return view('ships.list', compact('ships'));

    }

    public function shipsDetail($name)
    {

        $ship = Ship::where('name', '=', $name)->get()->first();

        return view('ships.detail', compact('ship'));

    }

}
