// --------------- HEADER : fond au scroll ---------------
function closeBrandTransition(btn) {
    var banner = btn.closest('.brand-transition');
    if (banner) banner.hidden = true;
    document.body.classList.add('brand-transition-dismissed');
}

function getReeliaLoginUrl() {
    var hostname = window.location.hostname;
    if (hostname === 'localhost' || hostname === '127.0.0.1') {
        return 'http://localhost:5180';
    }
    return 'https://login.resaam.com';
}

function updateReeliaLoginLinks() {
    var loginUrl = getReeliaLoginUrl();
    var links = document.querySelectorAll('a[href="/pages/connexion.html"], a[href="pages/connexion.html"]');

    links.forEach(function (link) {
        link.href = loginUrl;
        link.removeAttribute('target');
    });
}

(function () {
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', updateReeliaLoginLinks);
    } else {
        updateReeliaLoginLinks();
    }
})();

(function () {
    var banner = document.querySelector('.brand-transition');
    var closeBtn = document.querySelector('.brand-transition-close');
    if (!banner || !closeBtn) return;

    closeBtn.addEventListener('click', function () {
        closeBrandTransition(closeBtn);
    });
})();

(function () {
    var header = document.querySelector('.header');
    if (!header) return;

    var SCROLL_THRESHOLD = 50;

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
    var slider = document.getElementById('temoignagesSlider');
    if (!slider) return;

    var track = document.getElementById('temoignageTrack');
    var dotsWrap = document.getElementById('temoignageDots');
    var prevBtn = document.getElementById('temoignagePrev');
    var nextBtn = document.getElementById('temoignageNext');

    // Garde : si un élément attendu manque, on arrête proprement au lieu de
    // laisser une exception planter le reste du script (FAQ, contact, menu...)
    if (!track || !dotsWrap || !prevBtn || !nextBtn) return;

    var cards = track.querySelectorAll('.temoignage-card');
    if (!cards.length) return;

    var current = 0;
    var autoplayTimer = null;
    var AUTOPLAY_DELAY = 2000;

    cards.forEach(function (_, i) {
        var dot = document.createElement('button');
        dot.classList.add('temoignage-dot');
        if (i === 0) dot.classList.add('active');
        dot.setAttribute('aria-label', 'Aller au témoignage ' + (i + 1));
        dot.addEventListener('click', function () { goTo(i); });
        dotsWrap.appendChild(dot);
    });

    var dots = dotsWrap.querySelectorAll('.temoignage-dot');

    function update() {
        track.style.transform = 'translateX(-' + (current * 100) + '%)';
        dots.forEach(function (dot, i) { dot.classList.toggle('active', i === current); });
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

    slider.addEventListener('mouseenter', function () { clearInterval(autoplayTimer); });
    slider.addEventListener('mouseleave', startAutoplay);

    var touchStartX = 0;
    track.addEventListener('touchstart', function (e) {
        touchStartX = e.touches[0].clientX;
    }, { passive: true });

    track.addEventListener('touchend', function (e) {
        var diff = e.changedTouches[0].clientX - touchStartX;
        if (diff > 50) prev();
        else if (diff < -50) next();
    });

    startAutoplay();
})();

// --------------- FAQ : Accordéon ---------------
(function () {
    var faqQuestions = document.querySelectorAll('.faq-question');
    if (!faqQuestions.length) return;

    faqQuestions.forEach(function (button) {
        button.addEventListener('click', function () {
            var item = button.closest('.faq-item');
            if (!item) return;
            var answer = item.querySelector('.faq-answer');
            if (!answer) return;
            var isActive = item.classList.contains('active');

            document.querySelectorAll('.faq-item.active').forEach(function (openItem) {
                if (openItem !== item) {
                    openItem.classList.remove('active');
                    var openAnswer = openItem.querySelector('.faq-answer');
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
    var faqFilters = document.querySelectorAll('.faq-filter');
    var faqGroups = document.querySelectorAll('.faq-group');
    var faqEmpty = document.querySelector('.faq-empty');
    if (!faqFilters.length) return;

    faqFilters.forEach(function (filter) {
        filter.addEventListener('click', function () {
            faqFilters.forEach(function (f) { f.classList.remove('active'); });
            filter.classList.add('active');

            var target = filter.dataset.filter;
            var visibleCount = 0;

            faqGroups.forEach(function (group) {
                var match = target === 'all' || group.dataset.category === target;
                group.style.display = match ? '' : 'none';
                if (match) visibleCount++;
            });

            if (faqEmpty) faqEmpty.style.display = visibleCount === 0 ? 'block' : 'none';
        });
    });
})();

// --------------- CONTACT : Config des canaux + Web3Forms ---------------
(function () {
    var contactForm = document.getElementById('contact-form');
    if (!contactForm) return; // rien à faire sur les pages sans formulaire de contact

    // Une seule clé d'accès Web3Forms pour tous les canaux : c'est le même
    // formulaire physique, seul l'affichage (onglets, header, champs) change.
    var WEB3FORMS_ACCESS_KEY = '6e4c85f6-d56e-4b60-94f0-127209c74d20';

    var formAccessKey = document.getElementById('form-access-key');
    var formSubject = document.getElementById('form-subject');
    var formHeader = document.getElementById('contact-form-header');
    var formHeaderIcon = document.getElementById('contact-form-header-icon');
    var formHeaderTitle = document.getElementById('contact-form-header-title');
    var formHeaderDesc = document.getElementById('contact-form-header-desc');
    var formExtraFields = document.getElementById('contact-form-extra-fields');
    var formProfileGroup = document.getElementById('contact-form-profile-group');
    var formMessageLabel = document.getElementById('contact-form-message-label');
    var submitBtnText = contactForm.querySelector('.btn-text');
    var messageTextarea = document.getElementById('message');

    var currentChannel = 'demo'; // canal actif par défaut, doit matcher l'onglet .active du HTML

    var channelConfig = {
        demo: {
            icon: 'ti-rocket',
            title: 'Demander une démo',
            desc: null,
            subject: 'Nouvelle demande de démo - Site Reelia',
            submitLabel: 'Envoyer ma demande',
            messageRequired: false,
            showHeader: false,
            showExtra: true
        },
        message: {
            icon: 'ti-message',
            title: 'Envoyer un message',
            desc: null,
            subject: 'Nouveau message - Site Reelia',
            submitLabel: 'Envoyer le message',
            messageRequired: true,
            showHeader: false,
            showExtra: true
        },
        commercial: {
            icon: 'ti-mail',
            title: "Contacter l'équipe commerciale",
            desc: "Décrivez votre besoin, un membre de l'équipe commerciale vous répond sous 24h ouvrées.",
            subject: 'Nouvelle demande commerciale - Site Reelia',
            submitLabel: 'Envoyer',
            messageRequired: true,
            showHeader: true,
            showExtra: false
        },
        support: {
            icon: 'ti-headset',
            title: 'Contacter le support client',
            desc: 'Décrivez votre problème technique, notre équipe support vous répond dans les meilleurs délais.',
            subject: 'Nouvelle demande support - Site Reelia',
            submitLabel: 'Envoyer',
            messageRequired: true,
            showHeader: true,
            showExtra: false
        }
    };

    function formDataToObject(formData) {
        var object = {};
        formData.forEach(function (value, key) {
            object[key] = value;
        });
        return object;
    }

    function applyChannel(target) {
        var config = channelConfig[target];
        if (!config) return;
        currentChannel = target;

        if (formAccessKey) formAccessKey.value = WEB3FORMS_ACCESS_KEY;
        if (formSubject) formSubject.value = config.subject;
        if (submitBtnText) submitBtnText.textContent = config.submitLabel;
        if (messageTextarea) {
            messageTextarea.required = config.messageRequired;
            messageTextarea.placeholder = config.messageRequired
                ? 'Décrivez votre demande...'
                : 'Décrivez brièvement votre contexte et vos besoins...';
        }
        if (formMessageLabel) {
            formMessageLabel.textContent = config.messageRequired ? 'Message' : 'Message (optionnel)';
        }

        if (formHeader) {
            if (config.showHeader) {
                if (formHeaderIcon) formHeaderIcon.innerHTML = '<i class="ti ' + config.icon + '"></i>';
                if (formHeaderTitle) formHeaderTitle.textContent = config.title;
                if (formHeaderDesc) formHeaderDesc.textContent = config.desc;
                formHeader.style.display = 'flex';
            } else {
                formHeader.style.display = 'none';
            }
        }

        if (formExtraFields) formExtraFields.style.display = config.showExtra ? 'flex' : 'none';
        if (formProfileGroup) formProfileGroup.style.display = config.showExtra ? 'flex' : 'none';

        document.querySelectorAll('[data-form-target]').forEach(function (btn) {
            btn.classList.toggle('active', btn.dataset.formTarget === target);
        });
    }

    document.querySelectorAll('[data-form-target]').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var target = btn.dataset.formTarget;
            applyChannel(target);

            if (window.innerWidth < 960) {
                var card = document.getElementById('contact-form-card');
                if (card) card.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

    // État initial cohérent avec channelConfig (plutôt que de dépendre
    // uniquement de ce qui est codé en dur dans le HTML)
    applyChannel(currentChannel);

    contactForm.addEventListener('submit', function (e) {
        e.preventDefault();
        var form = e.target;
        var submitBtn = form.querySelector('.cta-form-submit');
        var btnText = submitBtn ? submitBtn.querySelector('.btn-text') : null;
        var originalText = btnText ? btnText.textContent : null;

        if (submitBtn) submitBtn.disabled = true;
        if (btnText) btnText.textContent = 'Envoi en cours...';

        var formData = new FormData(form);
        var object = formDataToObject(formData);
        object.access_key = WEB3FORMS_ACCESS_KEY; // garantie, même si le champ caché a été altéré
        var json = JSON.stringify(object);

        fetch('https://api.web3forms.com/submit', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    Accept: 'application/json'
                },
                body: json
            })
            .then(function (response) {
                return response.json();
            })
            .then(function (result) {
                if (result.success) {
                    showFormFeedback(form, 'success', 'Votre demande a bien été envoyée. Nous revenons vers vous sous 24h ouvrées.');
                    form.reset();
                    applyChannel(currentChannel); // réapplique l'état du canal après le reset natif
                } else {
                    showFormFeedback(form, 'error', 'Une erreur est survenue. Merci de réessayer ou de nous contacter par téléphone.');
                }
            })
            .catch(function () {
                showFormFeedback(form, 'error', "Impossible d'envoyer le formulaire. Vérifiez votre connexion et réessayez.");
            })
            .then(function () {
            if (submitBtn) submitBtn.disabled = false;
            if (btnText) btnText.textContent = originalText;
            });
    });

    function showFormFeedback(form, type, message) {
        var existing = form.querySelector('.form-feedback');
        if (existing) existing.remove();

        var feedback = document.createElement('p');
        feedback.className = 'form-feedback form-feedback-' + type;
        feedback.textContent = message;
        form.appendChild(feedback);
    }
})();

// --------------- CTA FORM (page d'accueil) : envoi AJAX sans redirection ---------------
(function () {
    var ctaForm = document.getElementById('cta-form');
    if (!ctaForm) return; // rien à faire sur les pages sans ce formulaire

    function formDataToObject(formData) {
        var object = {};
        formData.forEach(function (value, key) {
            object[key] = value;
        });
        return object;
    }

    ctaForm.addEventListener('submit', function (e) {
        e.preventDefault(); // empêche la soumission classique -> plus de redirection vers Web3Forms

        var form = e.target;
        var submitBtn = form.querySelector('.cta-form-submit');
        var originalText = submitBtn ? submitBtn.textContent : null;

        if (submitBtn) {
            submitBtn.disabled = true;
            submitBtn.textContent = 'Envoi en cours...';
        }

        var formData = new FormData(form);
        var object = formDataToObject(formData);
        var json = JSON.stringify(object);

        fetch('https://api.web3forms.com/submit', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    Accept: 'application/json'
                },
                body: json
            })
            .then(function (response) {
                return response.json();
            })
            .then(function (result) {
                if (result.success) {
                    showCtaFeedback(form, 'success', 'Votre demande a bien été envoyée. Nous revenons vers vous sous 24h ouvrées.');
                    form.reset();
                } else {
                    showCtaFeedback(form, 'error', 'Une erreur est survenue. Merci de réessayer ultérieurement');
                }
            })
            .catch(function () {
                showCtaFeedback(form, 'error', "Impossible d'envoyer le formulaire. Vérifiez votre connexion et réessayez.");
            })
            .then(function () {
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.textContent = originalText;
                }
            });
    });

    function showCtaFeedback(form, type, message) {
        var existing = form.querySelector('.form-feedback');
        if (existing) existing.remove();

        var feedback = document.createElement('p');
        feedback.className = 'form-feedback form-feedback-' + type;
        feedback.textContent = message;
        form.appendChild(feedback);
    }
})();

// --------------- MENU MOBILE ---------------
(function () {
    var burger = document.querySelector('.burger');
    var nav = document.getElementById('mainNav');
    var overlay = document.querySelector('.nav-overlay');
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

        document.querySelectorAll('.nav-item.dropdown-open').forEach(function (item) {
            item.classList.remove('dropdown-open');
            var itemLink = item.querySelector('.nav-link');
            if (itemLink) itemLink.setAttribute('aria-expanded', 'false');
        });
    }

    burger.addEventListener('click', function () {
        nav.classList.contains('open') ? closeNav() : openNav();
    });

    overlay.addEventListener('click', closeNav);

    window.addEventListener('resize', function () {
        if (window.innerWidth > 900 && nav.classList.contains('open')) {
            closeNav();
        }
    });

    nav.querySelectorAll('.nav-list > .nav-item > a.nav-link').forEach(function (link) {
        link.addEventListener('click', closeNav);
    });

    nav.querySelectorAll('.dropdown-item').forEach(function (link) {
        link.addEventListener('click', closeNav);
    });

    var solutionsBtn = nav.querySelector('.nav-item > button.nav-link');
    if (solutionsBtn) {
        var solutionsItem = solutionsBtn.closest('.nav-item');
        solutionsBtn.addEventListener('click', function () {
            if (window.innerWidth > 900) return;
            if (!solutionsItem) return;
            var isOpen = solutionsItem.classList.toggle('dropdown-open');
            solutionsBtn.setAttribute('aria-expanded', String(isOpen));
        });
    }
})();

(function () {
    var backToTopBtn = document.getElementById('backToTop');
    if (!backToTopBtn) return;

    window.addEventListener('scroll', function () {
        if (window.scrollY > 400) {
            backToTopBtn.classList.add('visible');
        } else {
            backToTopBtn.classList.remove('visible');
        }
    });

    backToTopBtn.addEventListener('click', function () {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
})();
