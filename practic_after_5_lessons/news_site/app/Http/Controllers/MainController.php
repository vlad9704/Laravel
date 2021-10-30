<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{

    public function index()
    {

        $posts = Post::where('id', '<=', 6)->get();

        return view('index', compact('posts'));

    }

    public function postsList()
    {

        $posts = DB::table('posts')->paginate(9);

        return view('posts.list', compact('posts'));

    }

    public function postCreate()
    {
        return view('posts.create');
    }

    public function postSave()
    {

        \request()->validate([
            'title' => 'required | min:3',
            'description' => 'required',
            'likes' => 'required | numeric',
        ]);

        $post = Post::create([
            'title' => request()->title,
            'description' => request()->description,
            'likes' => request()->likes,
        ]);

        return redirect('/');

    }

    public function postDetail(Post $post)
    {
        return view('posts.detail', compact('post'));
    }

    public function postComments(Post $post)
    {

        request()->validate([
            'author' => 'required',
            'comment' => 'required'
        ]);

        $comment = new Comment ([
            'author' => request()->author,
            'comment' => request()->comment,
        ]);
        $post->comments()->save($comment);

        return redirect(route('post.detail', request('post_id')));

    }

}
