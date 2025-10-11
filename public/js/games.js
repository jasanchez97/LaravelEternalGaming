// public/js/games.js
document.addEventListener('DOMContentLoaded', function () {
    const deleteButtons = document.querySelectorAll('.delete-btn');
    const deleteModal = document.getElementById('deleteModal');
    const deleteForm = document.getElementById('deleteForm');
    const gameNameSpan = document.getElementById('gameName');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function () {
            const gameId = this.getAttribute('data-game-id');
            const gameName = this.getAttribute('data-game-name');

            // Actualizar el formulario con la URL correcta
            deleteForm.action = `/games/${gameId}`;
            gameNameSpan.textContent = gameName;

            // Mostrar el modal
            deleteModal.style.display = 'block';
        });
    });

    // Cerrar modal al hacer click fuera
    window.addEventListener('click', function (event) {
        if (event.target === deleteModal) {
            closeModal();
        }
    });
});

function closeModal() {
    document.getElementById('deleteModal').style.display = 'none';
}