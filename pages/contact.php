<?php require_once __DIR__ . '/../config.php'; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/variables.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/responsive.css">
    <title>Contact</title>
</head>

<body>

    <?php include __DIR__ . '/../templates/header.php'; ?>

    <main>

        <section class="about-hero">
            <div class="hero-glow" aria-hidden="true">
                <div class="hero-glow-top"></div>
                <div class="hero-glow-bottom"></div>
            </div>

            <span class="eyebrow-blue">Contact</span>
            <h1>Parlons de votre projet</h1>
            <p class="p1">Une question, un projet de déploiement ou besoin d'assistance ? Notre équipe vous répond sous 24h ouvrées.</p>
        </section>


        <section class="contact-section">
            <div class="contact-container">

                <div class="contact-info">
                    <h2>Nos coordonnées</h2>
                    <p class="p1">Choisissez le canal le plus adapté à votre demande — nos équipes commerciales, support et presse sont à votre écoute.</p>

                    <div class="contact-info-list">

                        <button class="contact-info-item" data-form-target="commercial" type="button">
                            <div class="icon"><i class="ti ti-mail"></i></div>
                            <div class="contact-info-text">
                                <strong>Email commercial</strong>
                                <span>Démo, devis, questions sur les solutions</span>
                            </div>
                            <i class="ti ti-chevron-right contact-info-arrow"></i>
                        </button>

                        <button class="contact-info-item" data-form-target="support" type="button">
                            <div class="icon"><i class="ti ti-headset"></i></div>
                            <div class="contact-info-text">
                                <strong>Support client</strong>
                                <span>Assistance technique pour les clients Resaam</span>
                            </div>
                            <i class="ti ti-chevron-right contact-info-arrow"></i>
                        </button>

                        <div class="contact-info-item contact-info-static">
                            <div class="icon"><i class="ti ti-phone"></i></div>
                            <div class="contact-info-text">
                                <strong>Téléphone</strong>
                                <span>01 00 00 00 00</span>
                                <span class="contact-info-sub">Du lundi au vendredi</span>
                            </div>
                        </div>

                        <div class="contact-info-item contact-info-static">
                            <div class="icon"><i class="ti ti-map-pin"></i></div>
                            <div class="contact-info-text">
                                <strong>Siège social</strong>
                                <span>Paris, 75000</span>
                                <span class="contact-info-sub">Île-de-France, France</span>
                            </div>
                        </div>

                    </div>

                    <div class="contact-hours">
                        <div class="contact-hours-title">
                            <i class="ti ti-clock"></i>
                            <span>Horaires d'assistance</span>
                        </div>
                        <div class="contact-hours-row">
                            <span>Lundi – Vendredi</span>
                            <span>9h00 – 18h00</span>
                        </div>
                        <div class="contact-hours-row">
                            <span>Support technique clients</span>
                            <span>24h/24 · 7j/7</span>
                        </div>
                        <div class="contact-hours-row">
                            <span>Réponse aux demandes commerciales</span>
                            <span>&lt; 24h ouvrées</span>
                        </div>
                    </div>

                    <div class="contact-trust">
                        <span><i class="ti ti-map-pin-check"></i> Hébergé en France</span>
                        <span><i class="ti ti-lock"></i> Chiffrement TLS</span>
                        <span><i class="ti ti-shield-check"></i> Conforme RGPD</span>
                    </div>
                </div>

                <div class="contact-form-card" id="contact-form-card">

                    <div class="contact-tabs">
                        <button class="contact-tab active" data-form-target="demo" type="button">Demander une démo</button>
                        <button class="contact-tab" data-form-target="message" type="button">Envoyer un message</button>
                    </div>

                    <div class="contact-form-header" id="contact-form-header" style="display:none;">
                        <div class="contact-form-header-icon" id="contact-form-header-icon">
                            <i class="ti ti-mail"></i>
                        </div>
                        <div>
                            <strong id="contact-form-header-title">Contacter l'équipe commerciale</strong>
                            <p id="contact-form-header-desc">Décrivez votre besoin, un membre de l'équipe commerciale vous répond sous 24h ouvrées.</p>
                        </div>
                    </div>

                    <form class="cta-form" id="contact-form">

                        <input type="hidden" name="access_key" id="form-access-key" value="VOTRE_CLE_FORMULAIRE_PRINCIPAL">
                        <input type="hidden" name="subject" id="form-subject" value="Nouvelle demande - Formulaire contact Resaam">
                        <input type="hidden" name="from_name" value="Site Resaam">
                        <input type="checkbox" name="botcheck" style="display:none">

                        <div class="cta-form-row">
                            <div class="cta-form-group">
                                <label for="prenom">Prénom</label>
                                <input type="text" id="prenom" name="prenom" placeholder="Jean" required>
                            </div>
                            <div class="cta-form-group">
                                <label for="nom">Nom</label>
                                <input type="text" id="nom" name="nom" placeholder="Dupont" required>
                            </div>
                        </div>

                        <div class="cta-form-group">
                            <label for="email">E-mail professionnel</label>
                            <input type="email" id="email" name="email" placeholder="j.dupont@etablissement.fr" required>
                        </div>

                        <div class="cta-form-row" id="contact-form-extra-fields">
                            <div class="cta-form-group">
                                <label for="etablissement">Établissement / Structure</label>
                                <input type="text" id="etablissement" name="etablissement" placeholder="CHU de Versailles">
                            </div>
                            <div class="cta-form-group">
                                <label for="telephone">Téléphone (optionnel)</label>
                                <input type="tel" id="telephone" name="telephone" placeholder="06 00 00 00 00">
                            </div>
                        </div>

                        <div class="cta-form-group" id="contact-form-profile-group">
                            <label>Vous êtes</label>
                            <div class="profile-select">
                                <label class="profile-option">
                                    <input type="radio" name="profil" value="samu" checked>
                                    <span class="profile-option-title">SAMU / ATSU</span>
                                    <span class="profile-option-sub">Urgence</span>
                                </label>
                                <label class="profile-option">
                                    <input type="radio" name="profil" value="etablissement">
                                    <span class="profile-option-title">Établissement</span>
                                    <span class="profile-option-sub">de santé</span>
                                </label>
                                <label class="profile-option">
                                    <input type="radio" name="profil" value="ambulancier">
                                    <span class="profile-option-title">Ambulancier</span>
                                    <span class="profile-option-sub">Transport assisté</span>
                                </label>
                            </div>
                        </div>

                        <div class="cta-form-group">
                            <label for="message" id="contact-form-message-label">Message (optionnel)</label>
                            <textarea id="message" name="message" placeholder="Décrivez brièvement votre contexte et vos besoins..."></textarea>
                        </div>

                        <button type="submit" class="button button-blue cta-form-submit">
                            <span class="btn-text">Envoyer ma demande</span>
                        </button>

                        <p class="cta-form-footer">Réponse sous 24h ouvrées · Données chiffrées et hébergées en France</p>
                    </form>

                </div>

            </div>
        </section>

    </main>

    <?php include __DIR__ . '/../templates/footer.php'; ?>

    <script src="<?= BASE_URL ?>/assets/js/app.js"></script>
</body>

</html>