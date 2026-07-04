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

// Carrousel de témoignages dynamique
(function () {
    const slider = document.getElementById('temoignagesSlider');
    if (!slider) return;

    const track = document.getElementById('temoignageTrack');
    const cards = track.querySelectorAll('.temoignage-card');
    const dotsWrap = document.getElementById('temoignageDots');
    const prevBtn = document.getElementById('temoignagePrev');
    const nextBtn = document.getElementById('temoignageNext');

    let current = 0;
    let autoplayTimer = null;
    const AUTOPLAY_DELAY = 2000;

    // Génère les points dynamiquement
    cards.forEach((_, i) => {
        const dot = document.createElement('button');
        dot.classList.add('temoignage-dot');
        if (i === 0) dot.classList.add('active');
        dot.setAttribute('aria-label', `Aller au témoignage ${i + 1}`);
        dot.addEventListener('click', () => goTo(i));
        dotsWrap.appendChild(dot);
    });

    const dots = dotsWrap.querySelectorAll('.temoignage-dot');

    function update() {
        track.style.transform = `translateX(-${current * 100}%)`;
        dots.forEach((dot, i) => dot.classList.toggle('active', i === current));
    }

    function goTo(index) {
        current = (index + cards.length) % cards.length;
        update();
        restartAutoplay();
    }

    function next() { goTo(current + 1); }
    function prev() { goTo(current - 1); }

    function startAutoplay() {
        autoplayTimer = setInterval(next, AUTOPLAY_DELAY);
    }

    function restartAutoplay() {
        clearInterval(autoplayTimer);
        startAutoplay();
    }

    nextBtn.addEventListener('click', next);
    prevBtn.addEventListener('click', prev);

    // Pause au survol
    slider.addEventListener('mouseenter', () => clearInterval(autoplayTimer));
    slider.addEventListener('mouseleave', startAutoplay);

    // Support swipe tactile
    let touchStartX = 0;
    track.addEventListener('touchstart', (e) => {
        touchStartX = e.touches[0].clientX;
    }, { passive: true });

    track.addEventListener('touchend', (e) => {
        const diff = e.changedTouches[0].clientX - touchStartX;
        if (diff > 50) prev();
        else if (diff < -50) next();
    });

    startAutoplay();
})();

document.querySelectorAll('.faq-question').forEach(button => {
    button.addEventListener('click', () => {
        const item = button.closest('.faq-item');
        const answer = item.querySelector('.faq-answer');
        const isActive = item.classList.contains('active');

        // Ferme les autres items (accordéon exclusif — retire ce bloc si tu veux plusieurs ouverts en même temps)
        document.querySelectorAll('.faq-item.active').forEach(openItem => {
            if (openItem !== item) {
                openItem.classList.remove('active');
                openItem.querySelector('.faq-answer').style.maxHeight = null;
            }
        });

        if (isActive) {
            item.classList.remove('active');
            answer.style.maxHeight = null;
        } else {
            item.classList.add('active');
            answer.style.maxHeight = answer.scrollHeight + 'px';
        }
    });
});