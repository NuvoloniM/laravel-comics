@extends('layout.layout')

@section('title', 'Comic Details')

@section('content')
<!-- uso $comic che è la chiave a cui ho dato valore nel web.php (è l'array singolo con id passato dal $key ) -->
    
    <div class="comic">
        <div class="splitter"></div>
        <div class="container">
            <div class="poster">
                <img src=" {{ $comic['thumb']}}" alt="comic poster">
            </div>
            <div class="row">
                <div class="description">
                    <h2> {{ $comic['title'] }}</h2>
                    <div class="price-box">
                        <div class="price">
                            <div>
                                U.S. Price: <span>{{ $comic['price'] }}</span>
                            </div>
                            <div>
                                AVAILABLE
                            </div>
                        </div>
                        <div>Check Availability &#9660;</div>
                    </div>
                    <p>
                        {{$comic['description']}}
                    </p>
                </div>
                <div class="advertisement">
                    <h4>advertisement</h4>
                    <div>
                        <img src=" {{ asset('./images/adv.jpg') }}" alt="advertising img">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection