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
    <title>Nos solutions : Transport Programmé</title>
</head>

<body>

    <?php include __DIR__ . '/../templates/header.php'; ?>

    <main>

        <!-- ============== HERO ============== -->
        <section class="solutions-hero">
            <div class="chip-light"><i class="fa-solid fa-calendar-check"></i> Nos solutions</div>
            <h1>Un espace pour chaque acteur<br>du transport programmé.</h1>
            <p class="p1">Établissements et transporteurs partagent la même donnée, en temps réel — plus
                d'appels, plus de ressaisie, une traçabilité complète de la demande à la prise en charge.</p>
            <div class="solutions-hero-buttons">
                <a href="#" class="button button-blue">Demander une démo</a>
                <a href="#" class="button button-transparent">Nous contacter</a>
            </div>
        </section>

        <!-- ============== ONGLETS + PANNEAUX ============== -->
        <section class="solutions-tabs-section" id="solutions">

            <div class="solutions-tabbar" role="tablist">
                <button class="solutions-tabbtn active" data-tab="etablissement" role="tab">
                    <i class="fa-solid fa-hospital"></i> Établissement
                </button>
                <button class="solutions-tabbtn" data-tab="transporteur" role="tab">
                    <i class="fa-solid fa-truck"></i> Transporteur
                </button>
            </div>

            <div class="solutions-panel">

                <!-- ---------- ÉTABLISSEMENT ---------- -->
                <div class="solutions-tabpanel active" id="panel-etablissement">
                    <div class="solutions-panel-grid">
                        <div class="solutions-panel-left">
                            <div class="chip-light">Espace établissement · Hôpitaux, cliniques, EHPAD</div>
                            <h3>Une demande, un délai affiché,<br>une ambulance visible sur la carte.</h3>
                            <p class="p2">Vos équipes connaissent l'heure d'arrivée en un seul coup d'œil, du
                                déclenchement jusqu'à la prise en soin effective du patient.</p>

                            <div class="solutions-feature-mini">
                                <div class="solutions-feature-mini-item">
                                    <span class="solutions-feature-mini-icon"><i class="fa-solid fa-plus"></i></span>
                                    <span>Commandez une ambulance</span>
                                </div>
                                <div class="solutions-feature-mini-item">
                                    <span class="solutions-feature-mini-icon"><i class="fa-solid fa-location-dot"></i></span>
                                    <span>Suivez-la en temps réel</span>
                                </div>
                                <div class="solutions-feature-mini-item">
                                    <span class="solutions-feature-mini-icon"><i class="fa-solid fa-list"></i></span>
                                    <span>Sans rappeler</span>
                                </div>
                            </div>

                            <ul class="check-list">
                                <li class="check-item">
                                    <span class="check-icon"><i class="fa-solid fa-check"></i></span>
                                    <span>Commande en moins de 60 secondes — programmée, inopinée ou en série</span>
                                </li>
                                <li class="check-item">
                                    <span class="check-icon"><i class="fa-solid fa-check"></i></span>
                                    <span>Délai d'arrivée estimé et actualisé en continu, visible par tout le
                                        service</span>
                                </li>
                                <li class="check-item">
                                    <span class="check-icon"><i class="fa-solid fa-check"></i></span>
                                    <span>Suivi de l'ambulance sur la carte, statut par statut, sans aucun appel</span>
                                </li>
                                <li class="check-item">
                                    <span class="check-icon"><i class="fa-solid fa-check"></i></span>
                                    <span>Historique complet et reporting par service et par pôle</span>
                                </li>
                                <li class="check-item">
                                    <span class="check-icon"><i class="fa-solid fa-check"></i></span>
                                    <span>Gestion des séries de transport (dialyse, radiothérapie, HDJ)
                                        automatisée</span>
                                </li>
                            </ul>

                            <div class="hero-buttons">
                                <a href="#" class="button button-blue">Demander une démo</a>
                                <a href="#" class="button button-white-fleche">En savoir plus</a>
                            </div>
                        </div>

                        <div class="solutions-panel-visual">
                            <div class="solutions-img-frame" style="--ar:4/3;">
                                <!-- Emplacement image : liste des véhicules en mission (interface établissement) -->
                                <img src="<?= BASE_URL ?>/assets/images/etablissement-vehicules-mission.png"
                                    alt="Liste des véhicules en mission avec statut et délai d'arrivée">
                            </div>

                            <div class="solutions-stats-grid">
                                <div class="solutions-stats-item">
                                    <div class="solutions-stats-number">&lt; 60 s</div>
                                    <div class="solutions-stats-label">pour passer une commande de transport</div>
                                </div>
                                <div class="solutions-stats-item">
                                    <div class="solutions-stats-number">0 appel</div>
                                    <div class="solutions-stats-label">nécessaire pour connaître le délai
                                        d'arrivée</div>
                                </div>
                                <div class="solutions-stats-item">
                                    <div class="solutions-stats-number">100 %</div>
                                    <div class="solutions-stats-label">des transports tracés et horodatés</div>
                                </div>
                                <div class="solutions-stats-item">
                                    <div class="solutions-stats-number">1 clic</div>
                                    <div class="solutions-stats-label">pour exporter le reporting par service ou
                                        par pôle</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ---------- TRANSPORTEUR ---------- -->
                <div class="solutions-tabpanel" id="panel-transporteur">
                    <div class="solutions-panel-grid">
                        <div class="solutions-panel-left">
                            <div class="chip-light">Espace transporteur · Sociétés d'ambulances</div>
                            <h3>Recevez, acceptez, tracez —<br>votre standard ne sonne plus pour les délais.</h3>
                            <p class="p2">Recevez en temps réel les demandes des établissements de santé,
                                acceptez en un geste, affectez véhicule et équipage. Chaque statut remonte
                                automatiquement chez le donneur d'ordre.</p>

                            <div class="solutions-feature-mini">
                                <div class="solutions-feature-mini-item">
                                    <span class="solutions-feature-mini-icon"><i class="fa-solid fa-bell"></i></span>
                                    <span>Les missions arrivent</span>
                                </div>
                                <div class="solutions-feature-mini-item">
                                    <span class="solutions-feature-mini-icon"><i class="fa-solid fa-check"></i></span>
                                    <span>Vous acceptez</span>
                                </div>
                                <div class="solutions-feature-mini-item">
                                    <span class="solutions-feature-mini-icon"><i class="fa-solid fa-clipboard-list"></i></span>
                                    <span>Le reste est tracé</span>
                                </div>
                            </div>

                            <ul class="check-list">
                                <li class="check-item">
                                    <span class="check-icon"><i class="fa-solid fa-check"></i></span>
                                    <span>Réception instantanée des missions, notifiées en temps réel</span>
                                </li>
                                <li class="check-item">
                                    <span class="check-icon"><i class="fa-solid fa-check"></i></span>
                                    <span>Acceptation et affectation de l'équipage en un geste</span>
                                </li>
                                <li class="check-item">
                                    <span class="check-icon"><i class="fa-solid fa-check"></i></span>
                                    <span>Statuts transmis automatiquement : fini les appels « vous êtes où ? »</span>
                                </li>
                                <li class="check-item">
                                    <span class="check-icon"><i class="fa-solid fa-check"></i></span>
                                    <span>Planning, séries récurrentes et flotte pilotés depuis un seul écran</span>
                                </li>
                                <li class="check-item">
                                    <span class="check-icon"><i class="fa-solid fa-check"></i></span>
                                    <span>Historique complet de chaque mission, horodaté et exportable</span>
                                </li>
                            </ul>

                            <div class="hero-buttons">
                                <a href="#" class="button button-blue">Devenir transporteur partenaire</a>
                                <a href="#" class="button button-white-fleche">En savoir plus</a>
                            </div>
                        </div>

                        <div class="solutions-panel-visual">
                            <div class="solutions-img-frame" style="--ar:16/10;">
                                <!-- Emplacement image : missions en temps réel (interface transporteur) -->
                                <img src="<?= BASE_URL ?>/assets/images/transporteur-missions-temps-reel.png"
                                     alt="Missions en temps réel côté transporteur avec statuts et délais">
                            </div>

                            <div class="solutions-stats-grid">
                                <div class="solutions-stats-item">
                                    <div class="solutions-stats-number">0</div>
                                    <div class="solutions-stats-label">ressaisie : les missions arrivent déjà
                                        structurées</div>
                                </div>
                                <div class="solutions-stats-item">
                                    <div class="solutions-stats-number">1 geste</div>
                                    <div class="solutions-stats-label">pour accepter et affecter un équipage</div>
                                </div>
                                <div class="solutions-stats-item">
                                    <div class="solutions-stats-number">-80 %</div>
                                    <div class="solutions-stats-label">d'appels entrants liés aux demandes de
                                        délai*</div>
                                </div>
                                <div class="solutions-stats-item">
                                    <div class="solutions-stats-number">100 %</div>
                                    <div class="solutions-stats-label">des missions horodatées et archivées</div>
                                </div>
                            </div>
                            <p class="solutions-stats-footnote">*Objectif constaté lors des déploiements pilotes,
                                variable selon l'organisation.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </main>

    <?php include __DIR__ . '/../templates/footer.php'; ?>

    <script src="<?= BASE_URL ?>/assets/js/app.js"></script>
    <script>
        document.querySelectorAll('.solutions-tabbtn').forEach(function (btn) {
            btn.addEventListener('click', function () {
                document.querySelectorAll('.solutions-tabbtn').forEach(function (b) {
                    b.classList.remove('active');
                });
                btn.classList.add('active');

                document.querySelectorAll('.solutions-tabpanel').forEach(function (p) {
                    p.classList.remove('active');
                });
                var target = document.getElementById('panel-' + btn.dataset.tab);
                if (target) target.classList.add('active');
            });
        });
    </script>
</body>

</html>