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
    <title>Régulation — Pilotez votre société d'ambulances</title>
</head>

<body>

    <?php include __DIR__ . '/../templates/header.php'; ?>

    <main>

        <!-- ============== HERO RÉGULATION ============== -->
        <section class="home-hero">
            <div class="hero-glow">
                <div class="hero-glow-top"></div>
                <div class="hero-glow-bottom"></div>
            </div>

            <div class="home-hero-left">
                <div style="display:flex; flex-wrap:wrap; gap:.75rem;">
                    <div class="chip-light"><i class="fa-solid fa-truck-medical"></i> Régulation · Destiné aux
                        ambulanciers</div>
                </div>

                <h1>Régulation.<br>Pilotez votre société d'ambulances.</h1>

                <p class="p1">Une suite dédiée aux sociétés de transport sanitaire pour gérer l'activité au
                    quotidien, au-delà de la mission elle-même — actuellement en cours de développement.</p>

                <ul class="check-list">
                    <li class="check-item">
                        <span class="check-icon"><i class="fa-solid fa-check"></i></span>
                        <span><strong>RH &amp; Planning</strong> — espace dédié à vos collaborateurs : plannings,
                            habilitations, absences, compétences, disponibilités, documents administratifs.</span>
                    </li>
                    <li class="check-item">
                        <span class="check-icon"><i class="fa-solid fa-check"></i></span>
                        <span><strong>Gestion de flotte et du matériel embarqué</strong> — suivi des véhicules,
                            entretien et disponibilité en temps réel, avec checklist quotidienne et dotation
                            matérielle.</span>
                    </li>
                    <li class="check-item">
                        <span class="check-icon"><i class="fa-solid fa-check"></i></span>
                        <span><strong>Facturation</strong> — devis, factures, suivi des règlements et export
                            comptable.</span>
                    </li>
                    <li class="check-item">
                        <span class="check-icon"><i class="fa-solid fa-check"></i></span>
                        <span><strong>Régulation automatisée avec intelligence artificielle</strong> —
                            optimisation automatique des affectations, prédictions des délais, détection
                            d'anomalies et aide à la décision en temps réel.</span>
                    </li>
                </ul>

                <div class="hero-buttons">
                    <a href="#" class="button button-blue">Devenir transporteur partenaire</a>
                    <a href="#" class="button button-transparent">En savoir plus</a>
                </div>
            </div>

            <div class="home-hero-right">
                <div class="device-showcase">

                    <div class="solutions-tabbar device-showcase-tabbar" role="tablist">
                        <button class="solutions-tabbtn active" data-device="desktop" role="tab">
                            <i class="fa-solid fa-desktop"></i> Interface web
                        </button>
                        <button class="solutions-tabbtn" data-device="missions" role="tab">
                            <i class="fa-solid fa-list"></i> Missions
                        </button>
                        <button class="solutions-tabbtn" data-device="detail" role="tab">
                            <i class="fa-solid fa-file-lines"></i> Détail mission
                        </button>
                        <button class="solutions-tabbtn" data-device="espace" role="tab">
                            <i class="fa-solid fa-user"></i> Mon espace
                        </button>
                    </div>

                    <div class="device-showcase-panel">

                        <!-- Bloc : interface web (moniteur) -->
                        <div class="device-panel-item active" id="device-desktop">
                            <div class="device-monitor">
                                <div class="device-monitor-screen">
                                    <!-- Emplacement image : interface web Régulation (carte véhicules + missions) -->
                                    <img src="<?= BASE_URL ?>/assets/images/regulation-desktop-carte-missions.png"
                                         alt="Interface web Régulation : carte des véhicules et missions en temps réel">
                                </div>
                            </div>
                            <div class="device-monitor-stand"></div>
                            <div class="device-monitor-base"></div>
                        </div>

                        <!-- Bloc : app mobile - liste des missions -->
                        <div class="device-panel-item" id="device-missions">
                            <div class="device-phone">
                                <div class="device-phone-screen">
                                    <!-- Emplacement image : app mobile - liste des missions -->
                                    <img src="<?= BASE_URL ?>/assets/images/regulation-mobile-missions.png"
                                         alt="Application mobile Régulation : liste des missions">
                                </div>
                            </div>
                        </div>

                        <!-- Bloc : app mobile - détail d'une mission -->
                        <div class="device-panel-item" id="device-detail">
                            <div class="device-phone">
                                <div class="device-phone-screen">
                                    <!-- Emplacement image : app mobile - détail d'une mission -->
                                    <img src="<?= BASE_URL ?>/assets/images/regulation-mobile-detail-mission.png"
                                         alt="Application mobile Régulation : détail d'une mission">
                                </div>
                            </div>
                        </div>

                        <!-- Bloc : app mobile - mon espace -->
                        <div class="device-panel-item" id="device-espace">
                            <div class="device-phone">
                                <div class="device-phone-screen">
                                    <!-- Emplacement image : app mobile - mon espace (planning, prochaine mission) -->
                                    <img src="<?= BASE_URL ?>/assets/images/regulation-mobile-mon-espace.png"
                                         alt="Application mobile Régulation : mon espace, planning et prochaine mission">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include __DIR__ . '/../templates/footer.php'; ?>

    <script src="<?= BASE_URL ?>/assets/js/app.js"></script>
    <script>
        document.querySelectorAll('.device-showcase-tabbar .solutions-tabbtn').forEach(function (btn) {
            btn.addEventListener('click', function () {
                document.querySelectorAll('.device-showcase-tabbar .solutions-tabbtn').forEach(function (b) {
                    b.classList.remove('active');
                });
                btn.classList.add('active');

                document.querySelectorAll('.device-panel-item').forEach(function (p) {
                    p.classList.remove('active');
                });
                var target = document.getElementById('device-' + btn.dataset.device);
                if (target) target.classList.add('active');
            });
        });
    </script>
</body>

</html>