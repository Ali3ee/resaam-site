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

// --------------- FAQ : Accordéon ---------------
document.querySelectorAll('.faq-question').forEach((btn) => {
    btn.addEventListener('click', () => {
        const item = btn.closest('.faq-item');
        item.classList.toggle('active');
    });
});

// --------------- FAQ : Filtres par catégorie ---------------
const faqFilters = document.querySelectorAll('.faq-filter');
const faqGroups = document.querySelectorAll('.faq-group');
const faqEmpty = document.querySelector('.faq-empty');

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

        faqEmpty.style.display = visibleCount === 0 ? 'block' : 'none';
    });
});

// --------------- CONTACT : Config des canaux ---------------
const formAccessKey = document.getElementById('form-access-key');
const formSubject = document.getElementById('form-subject');
const formHeader = document.getElementById('contact-form-header');
const formHeaderIcon = document.getElementById('contact-form-header-icon');
const formHeaderTitle = document.getElementById('contact-form-header-title');
const formHeaderDesc = document.getElementById('contact-form-header-desc');
const formExtraFields = document.getElementById('contact-form-extra-fields');
const formProfileGroup = document.getElementById('contact-form-profile-group');
const formMessageLabel = document.getElementById('contact-form-message-label');
const submitBtnText = document.querySelector('#contact-form .btn-text');
const messageTextarea = document.getElementById('message');

const channelConfig = {
    demo: {
        icon: 'ti-rocket',
        title: 'Demander une démo',
        desc: null,
        accessKey: 'VOTRE_CLE_FORMULAIRE_PRINCIPAL',
        subject: 'Nouvelle demande de démo - Site Resaam',
        submitLabel: 'Envoyer ma demande',
        messageRequired: false,
        showHeader: false,
        showExtra: true
    },
    message: {
        icon: 'ti-message',
        title: 'Envoyer un message',
        desc: null,
        accessKey: 'VOTRE_CLE_FORMULAIRE_PRINCIPAL',
        subject: 'Nouveau message - Site Resaam',
        submitLabel: 'Envoyer le message',
        messageRequired: true,
        showHeader: false,
        showExtra: true
    },
    commercial: {
        icon: 'ti-mail',
        title: "Contacter l'équipe commerciale",
        desc: "Décrivez votre besoin, un membre de l'équipe commerciale vous répond sous 24h ouvrées.",
        accessKey: 'VOTRE_CLE_COMMERCIAL',
        subject: 'Nouvelle demande commerciale - Site Resaam',
        submitLabel: 'Envoyer',
        messageRequired: true,
        showHeader: true,
        showExtra: false
    },
    support: {
        icon: 'ti-headset',
        title: 'Contacter le support client',
        desc: 'Décrivez votre problème technique, notre équipe support vous répond dans les meilleurs délais.',
        accessKey: 'VOTRE_CLE_SUPPORT',
        subject: 'Nouvelle demande support - Site Resaam',
        submitLabel: 'Envoyer',
        messageRequired: true,
        showHeader: true,
        showExtra: false
    }
};

function applyChannel(target) {
    const config = channelConfig[target];
    if (!config) return;

    formAccessKey.value = config.accessKey;
    formSubject.value = config.subject;
    submitBtnText.textContent = config.submitLabel;
    messageTextarea.required = config.messageRequired;
    messageTextarea.placeholder = config.messageRequired
        ? 'Décrivez votre demande...'
        : 'Décrivez brièvement votre contexte et vos besoins...';
    formMessageLabel.textContent = config.messageRequired ? 'Message' : 'Message (optionnel)';

    // Header contextualisé (visible seulement pour commercial / support)
    if (config.showHeader) {
        formHeaderIcon.innerHTML = `<i class="ti ${config.icon}"></i>`;
        formHeaderTitle.textContent = config.title;
        formHeaderDesc.textContent = config.desc;
        formHeader.style.display = 'flex';
    } else {
        formHeader.style.display = 'none';
    }

    // Champs établissement/téléphone masqués pour commercial/support (formulaire plus court)
    formExtraFields.style.display = config.showExtra ? 'flex' : 'none';
    formProfileGroup.style.display = config.showExtra ? 'flex' : 'none';

    // Onglets actifs uniquement pour demo/message
    document.querySelectorAll('.contact-tab').forEach((tab) => {
        tab.classList.toggle('active', tab.dataset.formTarget === target);
    });
}

// Boutons "Email commercial" / "Support client"
document.querySelectorAll('[data-form-target]').forEach((btn) => {
    btn.addEventListener('click', () => {
        const target = btn.dataset.formTarget;
        applyChannel(target);

        // Scroll vers le formulaire sur mobile/tablette
        if (window.innerWidth < 960) {
            document.getElementById('contact-form-card').scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    });
});

// --------------- WEB3FORMS : Soumission ---------------
document.getElementById('contact-form').addEventListener('submit', async (e) => {
    e.preventDefault();
    const form = e.target;
    const submitBtn = form.querySelector('.cta-form-submit');
    const btnText = submitBtn.querySelector('.btn-text');
    const originalText = btnText.textContent;

    submitBtn.disabled = true;
    btnText.textContent = 'Envoi en cours...';

    const formData = new FormData(form);
    const object = Object.fromEntries(formData);
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
        submitBtn.disabled = false;
        btnText.textContent = originalText;
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