@extends('layout')

@section('content')

    <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="my-4 ml-3">New post
            </h1>

            <div class="col-xl">
                <form method="POST" action="{{ route('post.create') }}">
                    {{--

                        @if($errors->has('title')) @endif

                        @error('title') @enderror

                    --}}
                    <div class="form-group">
                        <label for="inputTitle">Title</label>
                        <input value="{{ old('title') }}"
                               type="text"
                               class="{{ !$errors->has('title') ?: 'is-invalid' }} form-control"
                               id="inputTitle"
                               placeholder="Title"
                               name="title">
                        <p class="text-danger">{{ $errors->first('title') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="inputDesc">Description</label>
                        <textarea name="description" id="inputDesc" cols="30" rows="5" class = "form-control">{{ old('description') }}</textarea>
                        <p class="text-danger">{{ $errors->first('description') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="inputLikes">Likes</label>
                        <input value="{{ old('likes') }}" type="number" class="form-control" id="inputLikes" placeholder="Likes" name = "likes">
                        <p class="text-danger">{{ $errors->first('likes') }}</p>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>
    <!-- /.row -->

@endsection()
