// resources/js/games.js
let currentGameId = null;

// Abrir modal de confirmación
function initializeDeleteButtons() {
    document.querySelectorAll('.delete-btn').forEach(button => {
        button.addEventListener('click', function() {
            const gameId = this.getAttribute('data-game-id');
            const gameName = this.getAttribute('data-game-name');
            
            currentGameId = gameId;
            document.getElementById('gameName').textContent = gameName;
            document.getElementById('deleteForm').action = `/games/${gameId}`;
            document.getElementById('deleteModal').style.display = 'block';
        });
    });
}

// Cerrar modal
function closeModal() {
    document.getElementById('deleteModal').style.display = 'none';
    currentGameId = null;
}

// Cerrar modal al hacer clic fuera
function setupModalCloseEvents() {
    window.addEventListener('click', function(event) {
        const modal = document.getElementById('deleteModal');
        if (event.target === modal) {
            closeModal();
        }
    });

    // Cerrar con tecla Escape
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            closeModal();
        }
    });
}

// Inicializar cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', function() {
    initializeDeleteButtons();
    setupModalCloseEvents();
});