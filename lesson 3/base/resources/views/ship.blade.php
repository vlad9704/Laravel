@extends('layout')

@section('content')

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="my-4">Ships
                <small>Detail ship</small>
            </h1>

            <!-- Blog Post -->
            <div class="card mb-4">
                <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
                <div class="card-body">
                    <h2 class="card-title">{{$ship->name}}</h2>
                    <p class="card-text">{{$ship->launched}}</p>
                </div>
                <div class="card-footer text-muted">
                    <a href="#">{{$ship->class}}</a>
                </div>
                <h3>{{ $author->name }}</h3>
            </div>

        </div>

    </div>
    <!-- /.row -->

@endsection()
