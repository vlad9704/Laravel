@extends('layout')

@section('content')
    <!-- Page content-->
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Nested row for non-featured blog posts-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <!-- Blog post-->
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
                    </div>
                </div>
            </div>
        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">
            <!-- Search widget-->
            <div class="card mb-4">
                <div class="card-header">Search</div>
                <div class="card-body">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                        <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                    </div>
                </div>
            </div>
            <!-- Categories widget-->
            <div class="card mb-4">
                <div class="card-header">Tags</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="list-unstyled mb-0">
                                @foreach( $tags as $tag )
                                    <span style="font-weight: bold; color: {{ sprintf('#%02X%02X%02X', rand(0, 255), rand(0, 255), rand(0, 255)) }}">#{{ $tag->tag }}</span>;
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
