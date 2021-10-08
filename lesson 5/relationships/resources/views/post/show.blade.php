@extends('layout')

@section('content')

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="my-4">Post details
            </h1>
            <!-- Blog Post -->
            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="card-title">{{$post->title}}</h2>
                    <p class="card-text">{{$post->description}}</p>
                    <p class="card-text">{{$post->detail->full_description}}</p>
                </div>
                <div class="card-footer text-muted">
                    Posted on 1 July 2020
                    <p>Likes: {{$post->likes}}</p>
                </div>
            </div>
        </div>

    </div>
    <!-- /.row -->

@endsection()
