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
    return view('welcome');
}); 

Route::get('/contatos', function() {

    $nome = 'Erley';
    $idade = 27;
    $animal = 'Cachorro';
    $filmes = ['Shrek', 'De volta para o futuro', 'Gato de botas', 'Tubarão'];
    
    return view('contatos', ['nome' => $nome,'idade' => $idade, 'animal' => $animal, 'filmes' => $filmes ]);
});
