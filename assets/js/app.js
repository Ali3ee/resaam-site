const header = document.querySelector('.header');
const SCROLL_THRESHOLD = 50; // px avant d'activer le fond flouté

function toggleHeaderBackground() {
    if (window.scrollY > SCROLL_THRESHOLD) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
}

// Vérifie l'état au chargement (utile si la page est rechargée en cours de scroll)
toggleHeaderBackground();
