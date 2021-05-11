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
    $data = config('paste');

    $lunga = [];
    $corta = [];
    $cortissima = [];

    foreach($data as $key => $pasta) {

        $pasta['id'] = $key;

        if($pasta['tipo'] == 'lunga') {
            $lunga[] = $pasta;
        } elseif($pasta['tipo'] == 'corta') {
            $corta[] = $pasta;
        } elseif($pasta['tipo'] == 'cortissima') {
            $cortissima[] = $pasta;
        }
    }

    return view('home', [
        'corte' => $corta,
        'lunghe' => $lunga,
        'cortissime' => $cortissima
    ]);
})->name('homepage');

Route::get('/news', function() {
    return view('news');
})->name('news');

Route::get('/prova', function() {
    return view('prova');
})->name('pagina-prova');

Route::get('prodotto/{id?}', function ($id = 10) {
    $data = config('paste');
    
    if ($id >= count($data)) {
        abort(404);
    }

    // siamo all'ultimo prodotto
    if($id == count($data) - 1) {
        $next = 0;
        $prev = $id - 1;
    // siamo nel primo prodotto
    } elseif($id == 0) {
        $prev = count($data) - 1;
        $next = $id + 1;
    } else {
        $prev = $id - 1;
        $next = $id + 1;
    }

    $pasta = $data[$id];

    return view('prodotto', [
        'pasta' => $pasta,
        'prevProdottoId' => $prev,
        'nextProdottoId' => $next
    ]);
})->where('id', '[0-9]+')->name('prodotto');