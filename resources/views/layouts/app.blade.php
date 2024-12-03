<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
   
     @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <nav>
            <!-- Aquí iría tu menú de navegación -->
            <ul>
                <li><a href="{{ url('/es/home') }}">Inicio</a></li>
                <li><a href="{{ url('/es/servicios') }}">Servicios</a></li>
                <li><a href="{{ url('/es/contacto') }}">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content') <!-- Aquí se carga el contenido específico de cada vista -->
    </main>

    <footer>
        <p>&copy; 2024 Nuestro Hotel</p>
    </footer>
</body>
</html>
