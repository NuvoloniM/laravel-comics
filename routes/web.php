<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/comics', function (){
    //dopo aver copiato in config il file php con il database dei comics
    //lo trasformo in variabile per poterci lavorare
    //ogni volta che inserisco un file in config conviente lanciare il comando php artisan config:clear
    $comics = config('comics');
    //oltre a ritornare la pgina comics, ritrono anche la variabile creata
    return view('comics', [ 'comics' => $comics]);
    //gli assegno un name per poterlo richiamare con route()
})->name('comics');
