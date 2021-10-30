@extends('layout')

@section('content')

    <form method="POST" action="{{ route('post.save') }}">
        @csrf
        <h3>Title</h3>
        <input type="text" name="title" value="{{ old('title') }}">
        <p class="text-danger">{{ $errors->first('title') }}</p>
        <h3>Description</h3>
        <input type="text" name="description" value="{{ old('description') }}">
        <p class="text-danger">{{ $errors->first('description') }}</p>
        <h3>Likes</h3>
        <input type="text" name="likes" value="{{ old('likes') }}">
        <p class="text-danger">{{ $errors->first('likes') }}</p>
        <br>
        <input type="submit" class="btn btn-secondary">
    </form>

@endsection

