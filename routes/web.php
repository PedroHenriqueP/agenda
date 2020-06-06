<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/agenda', 'AgendaController');

Route::get('/agenda/{assunto}/delete', 'AgendaController@destroy')->name('agenda.destroy');

Route::get('/sobre', function(){
    return view('sobre');
});