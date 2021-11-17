@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 style="font-style: italic; color: cadetblue">{{ $post->title.' ✟ '.$post->description }}</h1>
            <h5>Likes: <span style="font-weight: bold; color: brown">{{ $post->likes }}</span></h5>
            <h5>Tags:
{{--                @foreach( $post->tags as $tag )--}}
{{--                    #<span style="color: '#'.{{ str_random(6) }}">{{ $tag->tag }}</span>--}}
{{--                @endforeach--}}
            </h5>
            <hr>
            <h1>Комментарии:</h1>
            @foreach( $post->comments as $comment )
                <h3 style="margin-top: 20px; color: #ba9387; text-decoration: underline">© {{ $comment->author.' - '.$comment->comment }}</h3>
            @endforeach
        </div>
        <div class="col-lg-12 mt-3">
            <h5 style="color: cornsilk; background: cadetblue; display: inline-block; padding: 5px 10px; border-radius: 5px; margin: 10px 0">Оставьте комментарий</h5>
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
            <br>

            <h5 style="color: cornsilk; background: cadetblue; display: inline-block; padding: 5px 10px; border-radius: 5px; margin: 10px 0">Добавить тэги</h5>
            <form method="POST" action="{{ route('post.tags', $post->id) }}">
                @csrf
                @if( $errors->has('tags') )
                    <p class="text-danger">{{ $errors->first('tags') }}</p>
                @endif
                <select name="tags[]" id="tags" class="form-control" multiple>
                    @foreach( $posts as $item )
                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                    @endforeach
                </select>
                @if( $errors->has('tag') )
                    <p class="text-danger">{{ $errors->first('tag') }}</p>
                @endif
                <input type="text" name="tag" value="{{ old('tag') }}">
                <input type="submit" class="btn btn-danger">
                <input type="hidden" name="post_id" value="{{ $post->id }}">
            </form>
        </div>
    </div>
@endsection()
