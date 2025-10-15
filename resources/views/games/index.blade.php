@extends('layouts.app')

@section('title', 'Listado de Juegos - Eternal Gaming')

@section('content')
    <div class="header-internal">
        <h1>Listado de Juegos</h1>
        <a href="{{ route('games.create') }}" class="btn btn-primary">
            Nuevo Juego
        </a>
    </div>

    <div class="game-list">
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

                <div class="game-details">
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
            </div>
        @endforeach

        @if($games->isEmpty())
            <div class="no-games">
                <p>No hay juegos registrados en el sistema.</p>
            </div>
        @endif
    </div>

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
@endsection

@section('scripts')
    <script>
        // Modal functionality
        function openModal(gameId, gameName) {
            document.getElementById('gameName').textContent = gameName;
            document.getElementById('deleteForm').action = `/games/${gameId}`;
            document.getElementById('deleteModal').style.display = 'block';
        }

        function closeModal() {
            document.getElementById('deleteModal').style.display = 'none';
        }

        // Event listeners
        document.addEventListener('DOMContentLoaded', function () {
            const deleteButtons = document.querySelectorAll('.delete-btn');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const gameId = this.getAttribute('data-game-id');
                    const gameName = this.getAttribute('data-game-name');
                    openModal(gameId, gameName);
                });
            });

            // Close modal when clicking outside
            window.addEventListener('click', function (event) {
                const modal = document.getElementById('deleteModal');
                if (event.target === modal) {
                    closeModal();
                }
            });
        });
    </script>
@endsection