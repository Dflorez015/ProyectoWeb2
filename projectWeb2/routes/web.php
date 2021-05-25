<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Hospital;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/docs', [Hospital::class, 'doctors']);

Route::post('/docs', [Hospital::class, 'createDoctor']);

Route::get('/docdelete/{id}', [Hospital::class, 'doctorsDelete']);

Route::post('/client', [Hospital::class, 'crearCliente']);

Route::get('client/{documento}', [Hospital::class, 'consultarCliente']);

Route::get('/docedit/{id}',[Hospital::class, 'imprimirDoc']);

Route::put('/docedit/{id}',[Hospital::class, 'editarDoc']);

Route::get('/consulta', function () {
    return view('consulta');
});
