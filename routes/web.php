<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/clientes', function () {
    echo "Páginas com os clientes cadastrados";
});

Route::get('/clientes/{codigo}', function ($codigo) {
    echo "Essa é a pagina do cliente ".$codigo;
});
