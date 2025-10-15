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
document.addEventListener('DOMContentLoaded', function() {
    const deleteButtons = document.querySelectorAll('.delete-btn');
    
    deleteButtons.forEach(button => {
        button.addEventListener('click', function() {
            const gameId = this.getAttribute('data-game-id');
            const gameName = this.getAttribute('data-game-name');
            openModal(gameId, gameName);
        });
    });

    // Close modal when clicking outside
    window.addEventListener('click', function(event) {
        const modal = document.getElementById('deleteModal');
        if (event.target === modal) {
            closeModal();
        }
    });
});