@extends('layout')

@section('content')

    <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="my-4 ml-3">New post
            </h1>

            <div class="col-xl">
                <form method="POST" action="{{ route('post.create') }}">
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
                        <label for="inputFullDesc">Full Description</label>
                        <textarea name="full_description" id="inputFullDesc" cols="30" rows="5" class = "form-control">{{ old('full_description') }}</textarea>
                        <p class="text-danger">{{ $errors->first('full_description') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="inputLikes">Likes</label>
                        <input value="{{ old('likes') }}" type="number" class="form-control" id="inputLikes" placeholder="Likes" name = "likes">
                        <p class="text-danger">{{ $errors->first('likes') }}</p>
                        <div class="form-group">
                            <label for="inputTags">Tags</label>
                            <select name="tags[]" id="inputTags" class="form-control" multiple>
                                @foreach($tags as $tag)
                                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>
    <!-- /.row -->

@endsection()
