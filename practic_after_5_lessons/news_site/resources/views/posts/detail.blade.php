@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 style="font-style: italic; color: cadetblue">{{ $post->title.' ✟ '.$post->description }}</h1>
            <h5>Likes: <span style="font-weight: bold; color: brown">{{ $post->likes }}</span></h5>
            <hr>
            <h1>Комментарии:</h1>
            @foreach( $post->comments as $comment )
                <h3 style="margin-top: 20px; color: #ba9387; text-decoration: underline">© {{ $comment->author.' - '.$comment->comment }}</h3>
            @endforeach
        </div>
        <div class="col-lg-12 mt-3">
            <form method="POST" action="{{ route('post.comments', $post->id) }}">
                @csrf
                <label for="author">
                    Имя
                    <br>
                    <input id="author" type="text" name="author" value="{{ old('author') }}">
                    @if( $errors->has('author') )
                        <p class="text-danger">{{ $errors->first('author') }}</p>
                    @endif
                </label>
                <br>
                <label for="comment">
                    Комментарий
                    <br>
                    <input id="comment" type="text" name="comment" value="{{ old('comment') }}">
                    @if( $errors->has('comment') )
                        <p class="text-danger">{{ $errors->first('comment') }}</p>
                    @endif
                </label>
                <br>
                <br>
                <input type="hidden" name="post_id" value="{{ $post->id }}">
                <input type="submit" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection()
