<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Eternal Gaming')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>🎮 Eternal Gaming</h1>
            <nav class="nav">
                <a href="{{ route('games.index') }}" class="nav-link">Inicio</a>
                <a href="{{ route('games.create') }}" class="btn btn-primary">Nuevo Juego</a>
            </nav>
        </header>

        <main class="main-content">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @yield('content')
        </main>
    </div>

    @yield('scripts')
</body>
</html>