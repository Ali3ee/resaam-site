<?php require_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/variables.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <title>Accueil | Resaam</title>
</head>
<body>

    <?php include __DIR__ . '/templates/header.php'; ?>

    <main>
        <div class="hero-glow" aria-hidden="true">
            <div class="hero-glow-top"></div>
            <div class="hero-glow-bottom"></div>
        </div>

        <section class="home-hero">

            <div class="home-hero-left">
                <span class="eyebrow-blue">Coordination du transport sanitaire</span>
                <h1>Le transport sanitaire, coordonné pour tous  les acteurs du soin.</h1>
                <p class="p1">Resaam connecte hôpitaux, SAMU et sociétés d'ambulances sur une plateforme unifiée — pour dispatcher plus vite, fiabiliser chaque mission et reprendre le contrôle de votre flotte.</p>

                <div class="hero-buttons">
                    <a href="#" class="button button-blue">Demander une demo</a>
                    <a href="#" class="button button-transparent">Nous contacter</a>
                </div>
            </div>

            <div class="home-hero-right">
                <div class="cadre">
                    <img src="<?= BASE_URL ?>/assets/images/hero-placeholder.png" alt="image hero page d'accueil">
                </div>
            </div>
        </section>

        <section class="partners-section">
            <p class="partners-label">Ils coordonnent leurs transports avec Resaam</p>

            <div class="partners-track">
                <div class="partners-inner">
                    <!-- premiere moitié -->
                    <span class="partner-logo"><span class="partner-dot"></span>CHU Versailles</span>
                    <span class="partner-logo"><span class="partner-dot"></span>SAMU 78</span>
                    <span class="partner-logo"><span class="partner-dot"></span>Sainte-Anne Ambulances</span>
                    <span class="partner-logo"><span class="partner-dot"></span>Groupe Santé</span>
                    <span class="partner-logo"><span class="partner-dot"></span>Hôpital de Poissy</span>
                    <span class="partner-logo"><span class="partner-dot"></span>CHU Versailles</span>
                    <span class="partner-logo"><span class="partner-dot"></span>SAMU 78</span>
                    <span class="partner-logo"><span class="partner-dot"></span>Sainte-Anne Ambulances</span>
                    <span class="partner-logo"><span class="partner-dot"></span>Groupe Santé</span>
                    <span class="partner-logo"><span class="partner-dot"></span>Hôpital de Poissy</span>
                    <span class="partner-logo"><span class="partner-dot"></span>CHU Versailles</span>
                    <span class="partner-logo"><span class="partner-dot"></span>SAMU 78</span>
                    <span class="partner-logo"><span class="partner-dot"></span>Sainte-Anne Ambulances</span>
                    <span class="partner-logo"><span class="partner-dot"></span>Groupe Santé</span>
                    <span class="partner-logo"><span class="partner-dot"></span>Hôpital de Poissy</span>

                    <!-- deuxième moitié -->
                    <span class="partner-logo"><span class="partner-dot"></span>CHU Versailles</span>
                    <span class="partner-logo"><span class="partner-dot"></span>SAMU 78</span>
                    <span class="partner-logo"><span class="partner-dot"></span>Sainte-Anne Ambulances</span>
                    <span class="partner-logo"><span class="partner-dot"></span>Groupe Santé</span>
                    <span class="partner-logo"><span class="partner-dot"></span>Hôpital de Poissy</span>
                    <span class="partner-logo"><span class="partner-dot"></span>CHU Versailles</span>
                    <span class="partner-logo"><span class="partner-dot"></span>SAMU 78</span>
                    <span class="partner-logo"><span class="partner-dot"></span>Sainte-Anne Ambulances</span>
                    <span class="partner-logo"><span class="partner-dot"></span>Groupe Santé</span>
                    <span class="partner-logo"><span class="partner-dot"></span>Hôpital de Poissy</span>
                    <span class="partner-logo"><span class="partner-dot"></span>CHU Versailles</span>
                    <span class="partner-logo"><span class="partner-dot"></span>SAMU 78</span>
                    <span class="partner-logo"><span class="partner-dot"></span>Sainte-Anne Ambulances</span>
                    <span class="partner-logo"><span class="partner-dot"></span>Groupe Santé</span>
                    <span class="partner-logo"><span class="partner-dot"></span>Hôpital de Poissy</span>
                </div>
            </div>
        </section>

        <section class="home-about">

            <div class="home-about-left">
                <span class="eyebrow-blue">L'entreprise</span>
                <h2>Né du terrain,pensé pour la régulation.</h2>
                <p class="p1">Resaam est né d'un constat simple : la coordination  du transport sanitaire reposait encore sur des outils  inadaptés — appels téléphoniques, feuilles de calcul, communications silotées.</p>
                <p class="p2">Notre plateforme unifie hôpitaux, sociétés d'ambulances et régulateurs  SAMU sur un même espace numérique, sécurisé et conforme HDS, pour que chaque transport soit tracé, piloté et optimisé en temps réel.</p>
                <a href="#" class="button button-white-fleche">Découvrir notre histoire</a>
            </div>

            <div class="home-about-right">
                <img src="<?= BASE_URL ?>/assets/images/home-about.png" alt="">
            </div>

        </section>

        <section class="home-solutions">

            <div class="titles">
                <span class="eyebrow-blue">Nos solutions</span>
                <h2>Trois solutions pour toutela chaîne de transport.</h2>
                <p class="p2">Chaque espace est pensé pour son utilisateur — interfaces épurées, données en temps réel, conformité maximale à chaque étape.</p>
            </div>

            <div class="home-solutions-items">

                <div class="home-solutions-item">

                    <div class="left">
                        <span class="chip-light">UPH · destiné au SAMU & aux ATSU</span>
                        <h3>Urgence pré-hospitalière. Dispatchez en quelques secondes.</h3>
                        <p class="p2">La bonne ambulance, au bon endroit, au bon moment. Resaam donne à vos régulateurs une vue temps réel sur la flotte disponible et automatise l'affectation des interventions UPH.</p>
                        <ul class="check-list">
                            <li class="check-item">
                                <span class="check-icon"><i class="ti ti-check"></i></span>
                                <span>Création d'intervention et affectation automatique en 1 clic</span>
                            </li>
                            <li class="check-item">
                                <span class="check-icon"><i class="ti ti-check"></i></span>
                                <span>Suivi ETA en temps réel, alertes et escalades automatiques</span>
                            </li>
                            <li class="check-item">
                                <span class="check-icon"><i class="ti ti-check"></i></span>
                                <span>Fiche bilan patient partagée entre équipes</span>
                            </li>
                            <li class="check-item">
                                <span class="check-icon"><i class="ti ti-check"></i></span>
                                <span>Traçabilité complète de chaque dossier</span>
                            </li>
                        </ul>
                        <a href="#" class="button button-white-fleche">En savoir plus</a>
                    </div>

                    <div class="right">
                        <img src="<?= BASE_URL ?>/assets/images/home-uph.png" alt="uph">
                    </div>
                </div>

                <div class="home-solutions-item-reverse">
                        <div class="left">
                            <span class="chip-light">Exemple chip</span>
                            <h3>Urgence pré-hospitalière. Dispatchez en quelques secondes.</h3>
                            <p class="p2">La bonne ambulance, au bon endroit, au bon moment. Resaam donne à vos régulateurs une vue temps réel sur la flotte disponible et automatise l'affectation des interventions UPH.</p>
                            <ul class="check-list">
                                <li class="check-item">
                                    <span class="check-icon"><i class="ti ti-check"></i></span>
                                    <span>Création d'intervention et affectation automatique en 1 clic</span>
                                </li>
                                <li class="check-item">
                                    <span class="check-icon"><i class="ti ti-check"></i></span>
                                    <span>Suivi ETA en temps réel, alertes et escalades automatiques</span>
                                </li>
                                <li class="check-item">
                                    <span class="check-icon"><i class="ti ti-check"></i></span>
                                    <span>Fiche bilan patient partagée entre équipes</span>
                                </li>
                                <li class="check-item">
                                    <span class="check-icon"><i class="ti ti-check"></i></span>
                                    <span>Traçabilité complète de chaque dossier</span>
                                </li>
                            </ul>
                            <a href="#" class="button button-white-fleche">En savoir plus</a>
                        </div>

                        <div class="right">
                            <img src="<?= BASE_URL ?>/assets/images/home-t-p.png" alt="uph">
                        </div>
                </div>

                <div class="home-solutions-item">

                    <div class="left">
                        <span class="chip-light">Exemple chip</span>
                        <h3>Urgence pré-hospitalière. Dispatchez en quelques secondes.</h3>
                        <p class="p2">La bonne ambulance, au bon endroit, au bon moment. Resaam donne à  vos régulateurs une vue temps réel sur la flotte disponible et automatise l'affectation des interventions UPH.</p>
                        <ul class="check-list">
                            <li class="check-item">
                                <span class="check-icon"><i class="ti ti-check"></i></span>
                                <span>Création d'intervention et affectation automatique en 1 clic</span>
                            </li>
                            <li class="check-item">
                                <span class="check-icon"><i class="ti ti-check"></i></span>
                                <span>Suivi ETA en temps réel, alertes et escalades automatiques</span>
                            </li>
                            <li class="check-item">
                                <span class="check-icon"><i class="ti ti-check"></i></span>
                                <span>Fiche bilan patient partagée entre équipes</span>
                            </li>
                            <li class="check-item">
                                <span class="check-icon"><i class="ti ti-check"></i></span>
                                <span>Traçabilité complète de chaque dossier</span>
                            </li>
                        </ul>
                        <a href="#" class="button button-white-fleche">En savoir plus</a>
                    </div>

                    <div class="right">
                        <img src="<?= BASE_URL ?>/assets/images/home-regulation.png" alt="uph">
                    </div>
                </div>

            </div>

        </section>

    </main>

    <?php include __DIR__ . '/templates/footer.php'; ?>

    <script src="<?= BASE_URL ?>/assets/js/app.js"></script>
</body>
</html>