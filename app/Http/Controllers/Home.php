<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        // Cargar la vista de la página de inicio
        return view('website/home'); // Esto renderiza la vista 'home.php' en 'app/Views/website'
    }
}
