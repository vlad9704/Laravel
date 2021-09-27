<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $posts = [
            [
                'title'=>'Hey! This is my First post!',
                'desc'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam.',
                'date'=>'January 1, 2020'
            ],
            [
                'title'=>'Hello world!!!',
                'desc'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam.',
                'date'=>'Feb 10, 2020'
            ],
            [
                'title'=>'Bitlab Academy!!!',
                'desc'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam.',
                'date'=>'June 26, 2020'
            ],
        ];
        return view('index', compact('posts'));
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }

    public function blog() {
        return view('blog');
    }
}
