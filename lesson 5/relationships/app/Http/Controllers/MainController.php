<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\PostDetail;
use App\Models\Tag;
use Illuminate\Http\Request,
    Illuminate\Support\Facades\DB;

class MainController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index');
        $this->middleware('checkUser', ['only' => ['create', 'store']]);
    }

    public function index() {

        $posts = Post::all();
        $tags = Tag::all();

        return view('post.index', compact('posts', 'tags'));
    }

    public function show(Post $post) {

        return view('post.show', compact('post'));

    }

    public function create() {

        $tags = Tag::all();

        return view('post.create', compact('tags'));

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

        $post->tags()->attach(request()->tags);

        return redirect(route('post.index'));

    }

    public function storeComment(Post $post) {

        request()->validate([
           'author' => 'required',
           'comment' => 'required',
        ]);

        //способ 2
        $comment = new Comment([
            'author' => request()->author,
            'comment' => request()->comment,
        ]);
        $post->comments()->save($comment);

        // способ 1
        /*Comment::create([
            'post_id' => $post->id,
            'author' => request()->author,
            'comment' => request()->comment,
        ]);*/

        return redirect(route('post.show', request('post_id')));

    }

    public function storeTag()
    {
        request()->validate(['name' => 'required']);
        Tag::create(['name' => request()->name]);

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

