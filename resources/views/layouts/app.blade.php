<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
   
     @vite(['resources/css/app.css','resources/css/home.css', 'resources/js/app.js','resources/js/navbar.js'])
</head>
<body>
    <header>
    @include('components.navbar')
    </header>

    <main>
        @yield('content') <!-- Aquí se carga el contenido específico de cada vista -->
    </main>

    <footer>
        <p>&copy; 2024 Nuestro Hotel</p>
    </footer>
</body>
</html>
