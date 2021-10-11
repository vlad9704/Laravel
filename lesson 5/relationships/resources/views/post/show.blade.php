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
                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#commentModal">
                        add comment
                    </button>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <h3 class="my-4">Post Comments
            </h3>
            @foreach($post->comments as $comment)
                <div class="card mb-4">
                    <div class="card-body">
                        <h4 class="card-title">{{$comment->author}}</h4>
                        <p class="card-text">{{$comment->comment}}</p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
    <!-- /.row -->

    <!-- Modal -->
    <div class="modal fade" id="commentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add comment</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('post.comment.store', $post->id) }}" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="inputAuthor">Author</label>
                            <input
                                type="text"
                                class="form-control "
                                id="inputAuthor"
                                placeholder="Author"
                                name = "author">
                        </div>
                        <div class="form-group">
                            <label for="inputComment">Comment</label>
                            <input
                                type="text"
                                class="form-control "
                                id="inputComment"
                                placeholder=" Comment..."
                                name = "comment">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="hidden" value="{{$post->id}}" name = "post_id">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>



@endsection()
