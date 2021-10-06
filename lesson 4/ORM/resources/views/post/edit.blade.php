@extends('layout')

@section('content')

    <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="my-4 ml-3">Edit post
            </h1>

            <div class="col-xl">
                <form method="POST" action="{{ route('post.update', $post->id) }}">
                    @method('PUT')
                    <div class="form-group">
                        <label for="inputTitle">Title</label>
                        <input type="text" class="form-control" id="inputTitle" placeholder="Title" name = "title" value="{{ $post->title }}">
                    </div>
                    <div class="form-group">
                        <label for="inputDesc">Description</label>
                        <textarea name="description" id="inputDesc" cols="30" rows="5" class = "form-control">{{ $post->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputLikes">Likes</label>
                        <input value="{{ $post->likes }}" type="number" class="form-control" id="inputLikes" placeholder="Likes" name = "likes">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>
    <!-- /.row -->

@endsection()
