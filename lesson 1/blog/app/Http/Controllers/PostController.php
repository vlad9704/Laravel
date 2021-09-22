<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    protected $posts = [
        1 => 'This is my first post!',
        2 => 'This is my second post!',
        3 => 'Hey! How are you? Laravel is cool!',
    ];

    public function show($id)
    {
        if(!isset($this->posts[$id]))
            abort('404',  'Post was not found');

        $post = $this->posts[$id];

        return view('post', compact('post','post'));
    }
}
