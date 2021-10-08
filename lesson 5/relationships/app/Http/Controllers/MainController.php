<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request,
    Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index() {

        $posts = Post::all();

        return view('post.index', compact('posts'));
    }

    public function show($id) {

        $post = Post::findOrFail($id);

        return view('post.show', compact('post'));
    }

    public function create() {

        return view('post.create');

    }

    public function edit($id) {

        $post = Post::findOrFail($id);

        return view('post.edit', compact('post'));

    }

    public function store() {

        // add to DB

        // validation
        request()->validate([
            'title' => ['required', 'min:5', 'max:20'],
            'description' => 'required',
            'likes' => 'required | numeric',
        ]);

        //dd(request()->all());
        /*$post = new post();
        $post->title = \request()->title;
        $post->description = \request()->description;
        $post->likes = \request()->likes;

        $post->save(); // добавить в базу*/

        // второй способ (дополнительно нужно указать в модели нужные параметры)
        Post::create([
            'title' => request()->title,
            'description' => request()->description,
            'likes' => request()->likes,
        ]);

        return redirect(route('post.index'));

    }

    public function destroy($id) {

        // remove in DB
        $post = Post::findOrFail($id)->delete();

        return redirect(route('post.index'));

    }

    public function update($id) {

        // update in DB

        /*$post = Post::findOrFail($id);

        $post->title = \request()->title;
        $post->description = \request()->description;
        $post->likes = \request()->likes;

        $post->save();*/

        Post::findOrFail($id)->update([
            'title' => \request()->title,
            'description' => \request()->description,
            'likes' => \request()->likes,
        ]);

        return redirect(route('post.show', \request()->id));

    }

}

