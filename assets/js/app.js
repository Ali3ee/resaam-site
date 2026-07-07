// --------------- HEADER : fond au scroll ---------------
(function () {
    const header = document.querySelector('.header');
    if (!header) return;

    const SCROLL_THRESHOLD = 50;

    function toggleHeaderBackground() {
        if (window.scrollY > SCROLL_THRESHOLD) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }

    toggleHeaderBackground();
    window.addEventListener('scroll', toggleHeaderBackground);
})();

// --------------- Carrousel de témoignages dynamique ---------------
(function () {
    const slider = document.getElementById('temoignagesSlider');
    if (!slider) return;

    const track = document.getElementById('temoignageTrack');
    const dotsWrap = document.getElementById('temoignageDots');
    const prevBtn = document.getElementById('temoignagePrev');
    const nextBtn = document.getElementById('temoignageNext');

    // Garde : si un élément attendu manque, on arrête proprement au lieu de
    // laisser une exception planter le reste du script (FAQ, contact, menu...)
    if (!track || !dotsWrap || !prevBtn || !nextBtn) return;

    const cards = track.querySelectorAll('.temoignage-card');
    if (!cards.length) return;

    let current = 0;
    let autoplayTimer = null;
    const AUTOPLAY_DELAY = 2000;

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

    slider.addEventListener('mouseenter', () => clearInterval(autoplayTimer));
    slider.addEventListener('mouseleave', startAutoplay);

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

// --------------- FAQ : Accordéon ---------------
(function () {
    const faqQuestions = document.querySelectorAll('.faq-question');
    if (!faqQuestions.length) return;

    faqQuestions.forEach((button) => {
        button.addEventListener('click', () => {
            const item = button.closest('.faq-item');
            const answer = item.querySelector('.faq-answer');
            const isActive = item.classList.contains('active');

            document.querySelectorAll('.faq-item.active').forEach((openItem) => {
                if (openItem !== item) {
                    openItem.classList.remove('active');
                    const openAnswer = openItem.querySelector('.faq-answer');
                    if (openAnswer) openAnswer.style.maxHeight = null;
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
})();

// --------------- FAQ : Filtres par catégorie ---------------
(function () {
    const faqFilters = document.querySelectorAll('.faq-filter');
    const faqGroups = document.querySelectorAll('.faq-group');
    const faqEmpty = document.querySelector('.faq-empty');
    if (!faqFilters.length) return;

    faqFilters.forEach((filter) => {
        filter.addEventListener('click', () => {
            faqFilters.forEach((f) => f.classList.remove('active'));
            filter.classList.add('active');

            const target = filter.dataset.filter;
            let visibleCount = 0;

            faqGroups.forEach((group) => {
                const match = target === 'all' || group.dataset.category === target;
                group.style.display = match ? '' : 'none';
                if (match) visibleCount++;
            });

            if (faqEmpty) faqEmpty.style.display = visibleCount === 0 ? 'block' : 'none';
        });
    });
})();

// --------------- CONTACT : Web3Forms ---------------
(function () {
    const contactForm = document.getElementById('contact-form');
    if (!contactForm) return; // rien à faire sur les pages sans formulaire de contact

    // Clé d'accès Web3Forms centralisée ici : elle est injectée dans les
    // données envoyées même si le champ caché du HTML est absent ou erroné.
    const WEB3FORMS_ACCESS_KEY = '6e4c85f6-d56e-4b60-94f0-127209c74d20';

    contactForm.addEventListener('submit', async (e) => {
        e.preventDefault();
        const form = e.target;
        const submitBtn = form.querySelector('.cta-form-submit');
        const btnText = submitBtn ? submitBtn.querySelector('.btn-text') : null;
        const originalText = btnText ? btnText.textContent : null;

        if (submitBtn) submitBtn.disabled = true;
        if (btnText) btnText.textContent = 'Envoi en cours...';

        const formData = new FormData(form);
        const object = Object.fromEntries(formData);
        object.access_key = WEB3FORMS_ACCESS_KEY;
        const json = JSON.stringify(object);

        try {
            const response = await fetch('https://api.web3forms.com/submit', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    Accept: 'application/json'
                },
                body: json
            });

            const result = await response.json();

            if (result.success) {
                showFormFeedback(form, 'success', 'Votre demande a bien été envoyée. Nous revenons vers vous sous 24h ouvrées.');
                form.reset();
            } else {
                showFormFeedback(form, 'error', 'Une erreur est survenue. Merci de réessayer ou de nous contacter par téléphone.');
            }
        } catch (error) {
            showFormFeedback(form, 'error', "Impossible d'envoyer le formulaire. Vérifiez votre connexion et réessayez.");
        } finally {
            if (submitBtn) submitBtn.disabled = false;
            if (btnText) btnText.textContent = originalText;
        }
    });

    function showFormFeedback(form, type, message) {
        const existing = form.querySelector('.form-feedback');
        if (existing) existing.remove();

        const feedback = document.createElement('p');
        feedback.className = `form-feedback form-feedback-${type}`;
        feedback.textContent = message;
        form.appendChild(feedback);
    }
})();

// --------------- MENU MOBILE ---------------
(function () {
    const burger = document.querySelector('.burger');
    const nav = document.getElementById('mainNav');
    const overlay = document.querySelector('.nav-overlay');
    if (!burger || !nav || !overlay) return;

    function openNav() {
        nav.classList.add('open');
        overlay.classList.add('active');
        burger.setAttribute('aria-expanded', 'true');
        document.body.classList.add('nav-locked');
    }

    function closeNav() {
        nav.classList.remove('open');
        overlay.classList.remove('active');
        burger.setAttribute('aria-expanded', 'false');
        document.body.classList.remove('nav-locked');

        document.querySelectorAll('.nav-item.dropdown-open').forEach((item) => {
            item.classList.remove('dropdown-open');
            item.querySelector('.nav-link')?.setAttribute('aria-expanded', 'false');
        });
    }

    burger.addEventListener('click', () => {
        nav.classList.contains('open') ? closeNav() : openNav();
    });

    overlay.addEventListener('click', closeNav);

    window.addEventListener('resize', () => {
        if (window.innerWidth > 900 && nav.classList.contains('open')) {
            closeNav();
        }
    });

    nav.querySelectorAll('.nav-list > .nav-item > a.nav-link').forEach((link) => {
        link.addEventListener('click', closeNav);
    });

    nav.querySelectorAll('.dropdown-item').forEach((link) => {
        link.addEventListener('click', closeNav);
    });

    const solutionsBtn = nav.querySelector('.nav-item > button.nav-link');
    if (solutionsBtn) {
        const solutionsItem = solutionsBtn.closest('.nav-item');
        solutionsBtn.addEventListener('click', () => {
            if (window.innerWidth > 900) return;
            const isOpen = solutionsItem.classList.toggle('dropdown-open');
            solutionsBtn.setAttribute('aria-expanded', String(isOpen));
        });
    }
})();