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

//Rotta per prodotto = show
//url: localhost:8080/prodotti/1
//creo una nuova rotta che continua da comics per mostrare il singolo comic selezionato
//id è un valore dinamico che mi viene passato tramite l'url e che a mia volta passo nella funzione per poterlo utilizzare nella pagina corrente
Route::get('/comics/{id}', function ($id) {

    $comics = config('comics');
    // dump($pasta);
    //validazione parametro
    if( is_numeric( $id ) && $id < count( $comics ) && $id >= 0 ){
        // dump($id);
        //dump( $comics[$id] );
        //setto variabile singolo fumetto selezionato tramite id dell'array
        $item = $comics[$id];
        //ritorno la pagina del comic singolo a cui passo come parametro tutti i dettagli dell'array singolo
        return view('comicDetails', [ 'comic' => $item ] );
    } else {
        abort(404);
    }


})->name('comicDetails');
