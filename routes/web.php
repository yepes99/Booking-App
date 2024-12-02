<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


// Cargar las rutas de España (es.php)
require __DIR__.'/es.php';


Route::redirect('/', '/es/home'); 


// Route::get('/', function () {
//     return view('welcome');
// });

