@extends('layout.layout')

@section('title', 'Comics')

@section('content')
    <div class="comics-section">
        <div class="label"> current series </div>
        <div class="row">
            <!-- per poter identificare il fumetto selezionato mi devo passare col foreach anche la key[numero id in questo caso] dell'item -->
            @foreach ( $comics as $key => $comic )
                <div class="col card">
                    <!-- trasformo la singola carta in un link che mi manda alla pagina del fumetto con i dettagli  -->
                    <a href=" {{ route('comicDetails', ['id' => $key]) }}">
                        <img src=" {{ $comic['thumb'] }} " alt="comics-img">
                        <h4>
                            {{ $comic['series']}}
                        </h4>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="btn-container">
            <div class="load">
                <a href="#">load more</a> 
            </div>
        </div>
    </div>
    <!-- sezione link per lo shop -->
    @include('partials.shop')
    
@endsection