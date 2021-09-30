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
        //dd(DB::table('ships')->count());
        //dd(DB::table('ships')->max('like'));
        //dd(DB::table('ships')->avg('like')); // среднее значение
        //dd(DB::table('ships')->where('author_id', '1')->exists());
        //dd(DB::table('ships')->where('author_id', '112313')->doesntExist());
        //dd(DB::table('ships')->distinct()->get()); // не повторяющиеся значения
        //dd(DB::table('ships')->where('like', DB::raw('(select max(`like`) from `ships`)'))->first()); // чистый SQL запрос
        //dd(DB::table('ships')->whereRaw('like = (select max(`like`) from `ships`)'))->first();
        //dd(DB::table('ships')->orderBy('like', 'asc')->first()); // по умолчанию asc

        // SELECT * FROM ships INNER JOIN "users" ON "ships.author_id" = "users.author_id"
        //dd(DB::table('ships')->join('users','ships.author_id','=','users.author_id')->get()); // запрос в разные таблицы

        $post = DB::table('ships')->where('name', $name)->first();
        $author = DB::table('users')->where('author_id', 1)->first();
        //dd($author_id);

        //dd($ship);
        //dd(DB::getQueryLog());

        return view('ship', compact(['ship', 'author']));
    }

}

