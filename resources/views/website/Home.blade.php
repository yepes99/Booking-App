<!-- resources/views/website/home.blade.php -->

@extends('layouts.app') <!-- Si usas un layout base, de lo contrario, omite esta línea -->

@section('title', 'Página de Inicio') <!-- Título de la página -->

@section('content')
    <div class="container">
        <h1>Bienvenido a Nuestro Hotel</h1>
        <p>Estamos encantados de tenerte aquí. Disfruta de una experiencia inolvidable.</p>

        <h2>Nuestros Servicios</h2>
        <ul>
            <li>Habitaciones confortables</li>
            <li>Restaurante gourmet</li>
            <li>Spa y gimnasio</li>
            <li>Piscina y actividades al aire libre</li>
        </ul>

        <p>Para más información, no dudes en ponerte en contacto con nosotros.</p>
    </div>
@endsection
