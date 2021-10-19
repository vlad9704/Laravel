@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1>{{ $ship->name }}</h1>
            <h3>{{ $ship->class }}</h3>
            <h5>{{ $ship->launched }}</h5>
        </div>
    </div>
@endsection()
