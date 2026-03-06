document.addEventListener('DOMContentLoaded', () => {
    const gameForm = document.getElementById('game-form');
    const gameList = document.getElementById('game-list');

    gameForm.addEventListener('submit', function(event) {
        event.preventDefault(); 

        const title = document.getElementById('game-title').value;
        const description = document.getElementById('game-description').value;
        
        const newGameCol = document.createElement('div');
        newGameCol.className = 'col-md-4 mb-4';

        newGameCol.innerHTML = `
            <div class="card">
                <div class="card-body bg-card">
                    <h5 class="card-title">${title}</h5>
                    <p class="card-text">${description}</p>
                </div>
            </div>
        `;

        gameList.appendChild(newGameCol);

        gameForm.reset();
    });
});