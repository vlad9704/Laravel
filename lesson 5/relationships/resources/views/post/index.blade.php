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
                        Posted on {{ $post->created_at }}
                        <p>Likes: {{$post->likes}}</p>
                        @foreach($post->tags as $tag)
                            <a href="#">{{$tag->name}}</a>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

        <div class="col-md-4 order-md-2 mb-4 mt-2">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <h1>Tags</h1>
            </h4>
            <ul class="list-group mb-3">
                @foreach($tags as $tag)
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">{{$tag->name}}</h6>
                        </div>
                    </li>
                @endforeach
            </ul>
            <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#tagModal">
                add tag
            </button>
        </div>

    </div>
    <!-- /.row -->

    <!-- Modal Tag -->
    <div class="modal fade" id="tagModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add tag</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('tag.store', $post->name) }}" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="inputAuthor">name</label>
                            <input
                                type="text"
                                class="form-control "
                                id="inputAuthor"
                                placeholder="name"
                                name = "name">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection()

