<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


// Cargar las rutas de España (es.php)
require __DIR__.'/es.php';


Route::get('/', function () {
    return view('welcome');
});

