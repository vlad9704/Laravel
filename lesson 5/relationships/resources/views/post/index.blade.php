@extends('layout')

@section('content')

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="my-4">Цитатник Мурада</h1>

        @foreach($posts as $post)
            <!-- Blog Post -->
                <div class="card mb-4">
                    <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-title">{{$post->title}}</h2>
                        <p class="card-text">{{$post->description}}</p>
                        <a target="" href="{{ route('post.show', $post->id) }}" class="btn btn-primary">Read More &rarr;</a>
                        <a target="" href="{{ route('post.edit', $post->id) }}" class="btn btn-success">Edit &rarr;</a>
                        <form method="POST" action="{{ route('post.destroy', $post->id) }}">
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </form>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on 1 July 2020
                        <p>Likes: {{$post->likes}}</p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
    <!-- /.row -->

@endsection()

