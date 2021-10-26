@extends('layout')

@section('content')
    <div class="row">
        @foreach($posts as $post)
            <div class="mb-4 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title h4">{{ $post->title }}</h2>
                        <h6 class=" text-muted">{{ $post->description }}</h6>
                        <h4 class="card-text" style="color: lightseagreen">{{ $post->likes }}</h4>
                        <a class="btn btn-secondary" href="{{ route('post.detail', $post->id) }}">Read more →</a>
                    </div>
                </div>
            </div>
        @endforeach
        {{ $posts->links('vendor.pagination.bootstrap-4') }}
    </div>
@endsection()
