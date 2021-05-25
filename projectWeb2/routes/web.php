<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/docs', function () {
    return view('doctors');
});

Route::get('/cons', function () {
    return view('consulta');
});

Route::get('hospital', function () {
    return view('hospital');
});

