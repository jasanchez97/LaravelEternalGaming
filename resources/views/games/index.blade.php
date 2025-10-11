<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eternal Gaming</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="header">
        <h1>Listado de Juegos - Eternal Gaming</h1>
        <a href="{{ route('games.create') }}" class="btn btn-primary">
            Nuevo Juego
        </a>
    </div>

    <!-- Mensajes de éxito -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @foreach ($games as $game)
        <div class="game-item">
            <div class="game-actions">
                <a href="{{ route('games.edit', $game->id) }}" class="btn btn-warning">Editar</a>
                <button type="button" class="btn btn-danger delete-btn" data-game-id="{{ $game->id }}"
                    data-game-name="{{ $game->name }}">
                    Eliminar
                </button>
            </div>

            <div class="game-title">{{ $game->name }}</div>
            @if($game->subtitle)
                <div class="game-subtitle">{{ $game->subtitle }}</div>
            @endif
            <div><strong>Desarrollador:</strong> {{ $game->developer }}</div>
            <div><strong>Categoría:</strong> {{ $game->category }}</div>
            <div><strong>Lanzamiento:</strong> {{ \Carbon\Carbon::parse($game->releaseDate)->format('d/m/Y') }}</div>
            @if($game->price)
                <div><strong>Precio:</strong> {{ $game->price }} €</div>
            @endif
            @if($game->stock !== null)
                <div><strong>Stock:</strong> {{ $game->stock }} unidades</div>
            @endif
        </div>
    @endforeach

    @if($games->isEmpty())
        <p>No hay juegos registrados en el sistema.</p>
    @endif

    <!-- Modal de Confirmación -->
    <div id="deleteModal" class="modal">
        <div class="modal-content">
            <h2>¿Eliminar Juego?</h2>
            <p>¿Estás seguro de que quieres eliminar "<span id="gameName"></span>"?</p>
            <p class="text-muted">Esta acción no se puede deshacer.</p>

            <div class="modal-buttons">
                <form id="deleteForm" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="modal-btn modal-btn-confirm">Sí, Eliminar</button>
                </form>
                <button type="button" class="modal-btn modal-btn-cancel" onclick="closeModal()">Cancelar</button>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/games.js') }}"></script>
</body>

</html>