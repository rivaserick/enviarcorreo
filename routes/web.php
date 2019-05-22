<?php

Route::get('/', function () {
    return view('email.email');
});

Route::post('enviarcorreo', 'EnviarCorreoController@store')->name('enviarcorreo');