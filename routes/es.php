<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;

// Asignamos la variable $l que define el idioma, en este caso España.
$l = 'es';

// Definir la ruta para la página de inicio en español
Route::match(['get', 'post'], $l . '/home', [Home::class, 'index'])->name('Home-index');
