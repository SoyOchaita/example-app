<!-- resources/views/layouts/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Tienda de Productos')</title>
    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Mi Tienda de Productos</h1>
    </header>

    <div class="content">
        @yield('content')
    </div>

    <footer>
        <p>Derechos reservados &copy; 2024</p>
    </footer>
</body>
</html>
