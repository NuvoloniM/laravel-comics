@extends('layout.layout')

@section('title', 'Comics')

@section('content')
    <div class="row">
        @foreach ( $comics as $comic )
            <div class="col card">
                <img src=" {{ $comic['thumb'] }} " alt="comics-img">
                <h3>
                    {{ $comic['series']}}
                </h3>
            </div>
        @endforeach
    </div>
@endsection