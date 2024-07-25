<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/proyecto', function () {
    return view('ProyectoView');
});

Route::get('/proyecto/{_id}', function ($_id) {
    return "El id es : {$_id} ";
});