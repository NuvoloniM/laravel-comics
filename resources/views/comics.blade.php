@extends('layout.layout')

@section('title', 'Comics')

@section('content')
    <div class="comics-section">
        <div class="label"> current series </div>
        <div class="row">
            @foreach ( $comics as $comic )
                <div class="col card">
                    <img src=" {{ $comic['thumb'] }} " alt="comics-img">
                    <h4>
                        {{ $comic['series']}}
                    </h4>
                </div>
            @endforeach
        </div>
        <div class="btn-container">
            <div class="load">
                <a href="#">load more</a> 
            </div>
        </div>
    </div>
    
@endsection