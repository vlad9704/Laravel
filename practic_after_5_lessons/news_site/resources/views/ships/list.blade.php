@extends('layout')

@section('content')
    <div class="row">
        @foreach($ships as $ship)
            <div class="mb-4 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="small text-muted">{{ $ship->launched }}</div>
                        <h2 class="card-title h4">{{ $ship->name }}</h2>
                        <p class="card-text">{{ $ship->class }}</p>
                        <a class="btn btn-primary" href="#!">Read more →</a>
                    </div>
                </div>
            </div>
        @endforeach
        {{ $ships->links('vendor.pagination.bootstrap-4') }}
    </div>
@endsection()
