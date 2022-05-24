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
        <div class="details">
            <div class="container">
                <div class="row">
                    <div class="talent">
                        <h3>Talent</h3>
                        <div class="details-item">
                            <div>
                                Art By:
                            </div>
                            <div class="primary-text">
                                @foreach($comic['artists'] as $artist)
                                <span>{{ $artist }}</span>
                                @endforeach
                            </div>
                        </div>
                        <div class="details-item">
                            <div>
                                Written By:
                            </div>
                            <div class="primary-text">
                                @foreach($comic['writers'] as $writer)
                                    <span>{{ $writer }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="specs">
                        <h3>Specs</h3>
                        <div class="details-item">
                            <div>Series: </div>
                            <div class="primary-text specs-text"> {{ $comic['series'] }}</div>
                        </div>
                        <div class="details-item">
                            <div>U.S. Price: </div>
                            <div class="specs-text"> {{ $comic['price'] }}</div>
                        </div>
                        <div class="details-item">
                            <div>On Sale Date</div>
                            <div class="specs-text"> {{ $comic['sale_date'] }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cta">
                <ul class="container">
                    <li>
                        <a href=""> digital comics</a>
                        <img src=" {{ asset('images/buy-comics-digital-comics.png') }} " alt="">
                    </li>
                    <li>
                        <a href=""> dc merchandise</a>
                        <img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="">
                    </li>
                    <li>
                        <a href=""> subscription</a>
                        <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="">
                    </li>
                    <li>
                        <a href=""> comic shop locator</a>
                        <img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="">
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection