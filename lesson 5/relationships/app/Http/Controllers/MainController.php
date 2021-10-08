<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostDetail;
use Illuminate\Http\Request,
    Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index() {

        $posts = Post::all();

        return view('post.index', compact('posts'));
    }

    public function show(Post $post) {

        return view('post.show', compact('post'));

    }

    public function create() {

        return view('post.create');

    }

    public function edit(Post $post) {

        return view('post.edit', compact('post'));

    }

    public function store() {

        // add to DB

        request()->validate([
            'title' => ['required', 'min:5', 'max:20'],
            'description' => 'required',
            'likes' => 'required | numeric',
            'full_description' => 'required',
        ]);

       $post = Post::create([
            'title' => request()->title,
            'description' => request()->description,
            'likes' => request()->likes,
        ]);

        PostDetail::create([
            'full_description' => request()->full_description,
            'post_id' => $post->id,
        ]);

        return redirect(route('post.index'));

    }

    public function destroy(Post $post) {

        // remove in DB
        $post->delete();

        return redirect(route('post.index'));

    }

    public function update(Post $post) {

        // update in DB

        $post->update([
            'title' => request()->title,
            'description' => request()->description,
            'likes' => request()->likes,
        ]);

        return redirect(route('post.show', $post->id));

    }

}

