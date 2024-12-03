<!-- resources/views/website/home.blade.php -->

 @extends('layouts.app') 

@section('title', 'Página de Inicio') <!-- Título de la página -->

@section('content')
    <div class="container">
        <h1 class="text-center my-4">Bienvenido a Nuestro Hotel</h1> <!-- Usamos clases para centrar y agregar márgenes -->
        <p class="lead text-center">Estamos encantados de tenerte aquí. Disfruta de una experiencia inolvidable.</p>

        <h2 class="my-4">Nuestros Servicios</h2>
        <ul class="list-group">
            <li class="list-group-item">Habitaciones confortables</li>
            <li class="list-group-item">Restaurante gourmet</li>
            <li class="list-group-item">Spa y gimnasio</li>
            <li class="list-group-item">Piscina y actividades al aire libre</li>
        </ul>

        <p class="my-4">Para más información, no dudes en ponerte en contacto con nosotros.</p>

        <div class="text-center">
            <a href="#" class="btn btn-primary">Contáctanos</a> <!-- Botón con estilo Bootstrap -->
        </div>
    </div>
@endsection
