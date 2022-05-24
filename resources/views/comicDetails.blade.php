@extends('layout.layout')

@section('title', 'Comic Details')

@section('content')
<!-- uso $comic che è la chiave a cui ho dato valore nel web.php (è l'array singolo con id passato dal $key ) -->
 <h2> {{ $comic['series']}}</h2>
@endsection