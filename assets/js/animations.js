/* =========================================================
   ANIMATIONS.JS — Apparitions au scroll (REELIA)
   -----------------------------------------------------------
   1) Étiquette automatiquement les blocs "connus" du site
      (sections, cartes, titres, images...) avec data-aos,
      SANS avoir besoin de modifier chaque page HTML.
   2) Respecte les data-aos posés manuellement dans le HTML
      (ils sont prioritaires et ne sont jamais écrasés).
   3) Observe le scroll (IntersectionObserver) et ajoute
      .aos-in au bon moment, avec un effet de stagger pour
      les listes/grilles de cartes.
   ========================================================= */

(function () {
    "use strict";

    var prefersReduced = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

    /* ---------------------------------------------------
       1. AUTO-TAGGING
       Sélecteurs "génériques" qui couvrent la quasi-totalité
       des blocs du site (header de section, cartes, images,
       formulaires...) sans dépendre d'une page précise.
       Chaque entrée : { selector, type, group }
       - group : si présent, les éléments correspondants
         partagent un effet de stagger par parent commun.
    --------------------------------------------------- */
    var AUTO_RULES = [
        // Titres / intros de section
        { selector: "section > .eyebrow-blue, section > .eyebrow-yellow", type: "fade-up" },
        { selector: "section h1, section h2, section h3", type: "fade-up" },
        { selector: "section > .p1, section > p.p1", type: "fade-up" },

        // Cartes & grilles (stagger automatique par parent)
        { selector: ".securite-card", type: "fade-up", group: true },
        { selector: ".temoignage-card", type: "fade-up", group: true },
        { selector: ".dropdown-item", type: "fade-in" },
        { selector: ".check-item", type: "fade-left", group: true },
        { selector: ".faq-item, .faq-question, .faq-list > *", type: "fade-up", group: true },
        { selector: ".cta-form-card", type: "zoom-in" },
        { selector: ".footer-grid > *", type: "fade-up", group: true },
        { selector: ".partners-section img, .partners-section .partner-logo", type: "fade-in", group: true },

        // Visuels
        { selector: ".home-hero img, .home-about img, .home-solutions img", type: "fade-up" },
        { selector: "section img:not([data-aos])", type: "fade-up" },

        // Blocs génériques de type "solution" / "chiffres"
        { selector: ".chiffres > * > *", type: "fade-up", group: true },
        { selector: ".home-solutions > .solution-item, .home-solutions > * > *", type: "fade-up", group: true }
    ];

    function autoTag() {
        AUTO_RULES.forEach(function (rule) {
            var nodes = document.querySelectorAll(rule.selector);
            nodes.forEach(function (el) {
                if (el.hasAttribute("data-aos")) return; // priorité au HTML manuel
                if (el.closest("header, nav, .header")) return; // pas d'anim sur le header fixe
                el.setAttribute("data-aos", rule.type);
                if (rule.group) {
                    el.setAttribute("data-aos-auto-group", "1");
                }
            });
        });
    }

    /* ---------------------------------------------------
       2. STAGGER
       Pour chaque groupe d'éléments animés partageant le
       même parent direct, on décale progressivement leur
       délai d'apparition.
    --------------------------------------------------- */
    function applyStagger() {
        var groups = new Map();

        document.querySelectorAll("[data-aos]").forEach(function (el) {
            var parent = el.parentElement;
            if (!parent) return;
            var isAutoGroup = el.hasAttribute("data-aos-auto-group");
            var explicitGroup = el.closest("[data-aos-group]");
            var key = explicitGroup ? explicitGroup : (isAutoGroup ? parent : null);
            if (!key) return;
            if (!groups.has(key)) groups.set(key, []);
            groups.get(key).push(el);
        });

        groups.forEach(function (items) {
            items.forEach(function (el, index) {
                if (el.hasAttribute("data-aos-delay")) return; // délai manuel prioritaire
                var step = parseInt(el.getAttribute("data-aos-stagger-step") || 90, 10);
                var delay = Math.min(index * step, 600); // on plafonne pour ne pas trop attendre
                el.style.transitionDelay = delay + "ms";
            });
        });
    }

    /* ---------------------------------------------------
       3. DURÉE / DÉLAI MANUELS (attributs data-*)
    --------------------------------------------------- */
    function applyManualTimings() {
        document.querySelectorAll("[data-aos]").forEach(function (el) {
            var duration = el.getAttribute("data-aos-duration");
            var delay = el.getAttribute("data-aos-delay");
            if (duration) el.style.transitionDuration = duration + "ms";
            if (delay) el.style.transitionDelay = delay + "ms";
        });
    }

    /* ---------------------------------------------------
       4. OBSERVATION DU SCROLL
    --------------------------------------------------- */
    function initObserver() {
        var targets = document.querySelectorAll("[data-aos]");

        if (prefersReduced || !("IntersectionObserver" in window)) {
            // Pas d'animation : on affiche tout directement
            targets.forEach(function (el) { el.classList.add("aos-in"); });
            return;
        }

        var observer = new IntersectionObserver(
            function (entries) {
                entries.forEach(function (entry) {
                    var el = entry.target;
                    var once = el.getAttribute("data-aos-once") !== "false";

                    if (entry.isIntersecting) {
                        el.classList.add("aos-in");
                        if (once) observer.unobserve(el);
                    } else if (!once) {
                        el.classList.remove("aos-in");
                    }
                });
            },
            {
                threshold: 0.15,
                rootMargin: "0px 0px -8% 0px"
            }
        );

        targets.forEach(function (el) { observer.observe(el); });
    }

    /* ---------------------------------------------------
       INIT
    --------------------------------------------------- */
    function init() {
        autoTag();
        applyStagger();
        applyManualTimings();
        initObserver();
    }

    if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", init);
    } else {
        init();
    }
})();
