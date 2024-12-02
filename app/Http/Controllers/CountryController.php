<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Show a general page or list of countries.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Lista de países
        $countries = [
            'es' => 'España',
            'en' => 'Estados Unidos',
        ];

        // Retornar la vista general con la lista de países
        return view('country.index', [
            'countries' => $countries,
        ]);
    }

    /**
     * Show the home page for a specific country.
     *
     * @param  string  $countryCode
     * @return \Illuminate\View\View
     */
    public function show($countryCode)
    {
        // Lista de países con su código
        $countries = [
            'es' => 'España',
            'us' => 'Estados Unidos',
        ];

        // Verificar si el código del país existe en la lista
        if (!array_key_exists($countryCode, $countries)) {
            abort(404, 'País no encontrado');
        }

        // Retornar la vista correspondiente con los datos del país
        return view('country.home', [
            'countryName' => $countries[$countryCode],
            'countryCode' => $countryCode,
        ]);
    }
}
