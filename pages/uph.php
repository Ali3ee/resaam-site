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
    <title>Nos solutions : Urgence Pré-Hospitalière</title>
</head>

<body>

    <?php include __DIR__ . '/../templates/header.php'; ?>

    <main>

        <!-- ============== HERO ============== -->
        <section class="solutions-hero">
            <div class="chip-light"><i class="fa-solid fa-truck-medical"></i> Nos solutions</div>
            <h1>Urgence pré-hospitalière,<br>connectée à chaque étape.</h1>
            <p class="p1">Resaam relie ambulanciers, ATSU, SAMU et services des urgences autour des mêmes
                données, transmises en temps réel, du départ de la mission jusqu'à l'arrivée du patient.</p>
            <div class="solutions-hero-buttons">
                <a href="#" class="button button-blue">Demander une démo</a>
                <a href="#" class="button button-transparent">Nous contacter</a>
            </div>
        </section>

        <!-- ============== ONGLETS + PANNEAUX ============== -->
        <section class="solutions-tabs-section" id="solutions">

            <div class="titles">
                <div class="eyebrow-blue">Interfaces UPH</div>
                <h2>Quatre espaces, une seule chaîne<br>de données.</h2>
                <p class="p1">Chaque utilisateur dispose d'une interface pensée pour son métier, connectée en
                    temps réel aux autres maillons de la chaîne de transport sanitaire.</p>
            </div>

            <div class="solutions-tabbar" role="tablist">
                <button class="solutions-tabbtn active" data-tab="ambulancier" role="tab">
                    <i class="fa-solid fa-truck-medical"></i> Ambulancier
                </button>
                <button class="solutions-tabbtn" data-tab="atsu" role="tab">
                    <i class="fa-solid fa-sitemap"></i> ATSU
                </button>
                <button class="solutions-tabbtn" data-tab="urgences" role="tab">
                    <i class="fa-solid fa-hospital"></i> Service des urgences
                </button>
                <button class="solutions-tabbtn" data-tab="samu" role="tab">
                    <i class="fa-solid fa-satellite-dish"></i> SAMU
                </button>
            </div>

            <div class="solutions-panel">

                <!-- ---------- AMBULANCIER ---------- -->
                <div class="solutions-tabpanel active" id="panel-ambulancier">
                    <div class="solutions-panel-grid">
                        <div class="solutions-panel-left">
                            <div class="chip-light">UPH · Interface ambulancier</div>
                            <h3>Urgence pré-hospitalière,<br>réception des missions.</h3>
                            <ul class="check-list">
                                <li class="check-item">
                                    <span class="check-icon"><i class="fa-solid fa-check"></i></span>
                                    <span>Réception des missions instantanément</span>
                                </li>
                                <li class="check-item">
                                    <span class="check-icon"><i class="fa-solid fa-check"></i></span>
                                    <span>Guidage GPS</span>
                                </li>
                                <li class="check-item">
                                    <span class="check-icon"><i class="fa-solid fa-check"></i></span>
                                    <span>ETA automatisé</span>
                                </li>
                                <li class="check-item">
                                    <span class="check-icon"><i class="fa-solid fa-check"></i></span>
                                    <span>Fiche bilan, transmise au SAMU en temps réel</span>
                                </li>
                                <li class="check-item">
                                    <span class="check-icon"><i class="fa-solid fa-check"></i></span>
                                    <span>Surveillance pendant le transport vue par le SAMU et le service des
                                        urgences en temps réel</span>
                                </li>
                            </ul>
                            <a href="#" class="button button-white-fleche">En savoir plus</a>
                        </div>

                        <div class="solutions-panel-visual">
                            <div class="solutions-visual-row">
                                <div class="solutions-img-frame" style="--ar:3/4;">
                                    <!-- Emplacement image : fiche bilan patient sur mobile (ambulancier) -->
                                    <img src="<?= BASE_URL ?>/assets/images/ambulancier-fiche-mobile.png"
                                         alt="Fiche bilan patient sur l'application mobile ambulancier">
                                </div>
                                <div class="solutions-img-frame" style="--ar:3/4;">
                                    <!-- Emplacement image : électrocardiogramme transmis en temps réel -->
                                    <img src="<?= BASE_URL ?>/assets/images/ambulancier-ecg.png"
                                         alt="Électrocardiogramme transmis en temps réel au SAMU et aux urgences">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ---------- ATSU ---------- -->
                <div class="solutions-tabpanel" id="panel-atsu">
                    <div class="solutions-panel-grid">
                        <div class="solutions-panel-left">
                            <div class="chip-light">UPH · Interface ATSU</div>
                            <h3>Urgence pré-hospitalière,<br>pilotage de l'activité en temps réel.</h3>
                            <ul class="check-list">
                                <li class="check-item">
                                    <span class="check-icon"><i class="fa-solid fa-check"></i></span>
                                    <span>Les règles de routage sont fixées par les ATSU</span>
                                </li>
                                <li class="check-item">
                                    <span class="check-icon"><i class="fa-solid fa-check"></i></span>
                                    <span>Contrôle et suivi en temps réel des missions transmises</span>
                                </li>
                                <li class="check-item">
                                    <span class="check-icon"><i class="fa-solid fa-check"></i></span>
                                    <span>Gestion des gardes préfectorales (tableau de garde, dossier RMG, ...)</span>
                                </li>
                            </ul>
                            <a href="#" class="button button-white-fleche">En savoir plus</a>
                        </div>

                        <div class="solutions-panel-visual">
                            <div class="solutions-img-frame" style="--ar:16/11;">
                                <!-- Emplacement image : tableau de bord statistiques ATSU -->
                                <img src="<?= BASE_URL ?>/assets/images/atsu-dashboard.png"
                                     alt="Tableau de bord ATSU : véhicules, interventions et taux de refus">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ---------- SERVICE DES URGENCES ---------- -->
                <div class="solutions-tabpanel" id="panel-urgences">
                    <div class="solutions-panel-grid">
                        <div class="solutions-panel-left">
                            <div class="chip-light">UPH · Interface service des urgences</div>
                            <h3>Urgence pré-hospitalière,<br>arrivée en temps réel.</h3>
                            <ul class="check-list">
                                <li class="check-item">
                                    <span class="check-icon"><i class="fa-solid fa-check"></i></span>
                                    <span>Tableau d'arrivée des ambulances en temps réel</span>
                                </li>
                                <li class="check-item">
                                    <span class="check-icon"><i class="fa-solid fa-check"></i></span>
                                    <span>Constantes vitales et motif transmis pendant le transport</span>
                                </li>
                                <li class="check-item">
                                    <span class="check-icon"><i class="fa-solid fa-check"></i></span>
                                    <span>Fiche bilan patient consultable en un clic</span>
                                </li>
                                <li class="check-item">
                                    <span class="check-icon"><i class="fa-solid fa-check"></i></span>
                                    <span>Délai d'arrivée mis à jour automatiquement</span>
                                </li>
                                <li class="check-item">
                                    <span class="check-icon"><i class="fa-solid fa-check"></i></span>
                                    <span>Traçabilité complète et historique des prises en charge</span>
                                </li>
                            </ul>
                            <a href="#" class="button button-white-fleche">En savoir plus</a>
                        </div>

                        <div class="solutions-panel-visual">
                            <div class="solutions-img-frame" style="--ar:16/9;">
                                <!-- Emplacement image : tableau d'arrivée des ambulances -->
                                <img src="<?= BASE_URL ?>/assets/images/urgences-arrivees.png"
                                     alt="Tableau d'arrivée des ambulances côté service des urgences">
                            </div>
                            <div class="solutions-visual-row solutions-visual-row-2x2">
                                <div class="solutions-img-frame" style="--ar:4/3;">
                                    <!-- Emplacement image : constantes en temps réel -->
                                    <img src="<?= BASE_URL ?>/assets/images/urgences-constantes.png"
                                         alt="Constantes du patient en temps réel">
                                </div>
                                <div class="solutions-img-frame" style="--ar:4/3;">
                                    <!-- Emplacement image : fiche bilan patient -->
                                    <img src="<?= BASE_URL ?>/assets/images/urgences-fiche-bilan.png"
                                         alt="Fiche bilan patient transmise au service des urgences">
                                </div>
                                <div class="solutions-img-frame" style="--ar:4/3;">
                                    <!-- Emplacement image : statut des transmissions -->
                                    <img src="<?= BASE_URL ?>/assets/images/urgences-transmissions.png"
                                         alt="Statut des transmissions de données synchronisées">
                                </div>
                                <div class="solutions-img-frame" style="--ar:4/3;">
                                    <!-- Emplacement image : alertes & surveillance -->
                                    <img src="<?= BASE_URL ?>/assets/images/urgences-alertes.png"
                                         alt="Alertes et surveillance en cas de dépassement des seuils">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ---------- SAMU ---------- -->
                <div class="solutions-tabpanel" id="panel-samu">
                    <div class="solutions-panel-grid">
                        <div class="solutions-panel-left">
                            <div class="chip-light">UPH · Interface SAMU</div>
                            <h3>Urgence pré-hospitalière,<br>dispatchée en quelques secondes.</h3>
                            <ul class="check-list">
                                <li class="check-item">
                                    <span class="check-icon"><i class="fa-solid fa-check"></i></span>
                                    <span>Connexion au logiciel SAMU</span>
                                </li>
                                <li class="check-item">
                                    <span class="check-icon"><i class="fa-solid fa-check"></i></span>
                                    <span>Création d'interventions et affectation automatique en 1 clic</span>
                                </li>
                                <li class="check-item">
                                    <span class="check-icon"><i class="fa-solid fa-check"></i></span>
                                    <span>Fiche bilan patient et électrocardiogramme visibles en temps réel et
                                        transmission PDF en fin de mission</span>
                                </li>
                                <li class="check-item">
                                    <span class="check-icon"><i class="fa-solid fa-check"></i></span>
                                    <span>Visibilité de la surveillance pendant le transport</span>
                                </li>
                                <li class="check-item">
                                    <span class="check-icon"><i class="fa-solid fa-check"></i></span>
                                    <span>Suivi ETA en temps réel, alertes et escalade automatique</span>
                                </li>
                                <li class="check-item">
                                    <span class="check-icon"><i class="fa-solid fa-check"></i></span>
                                    <span>Visibilité de l'activité et de toutes les données en temps réel avec
                                        export instantané</span>
                                </li>
                            </ul>
                            <a href="#" class="button button-white-fleche">En savoir plus</a>
                        </div>

                        <div class="solutions-panel-visual">
                            <div class="solutions-img-frame" style="--ar:16/9;">
                                <!-- Emplacement image : interventions en cours (interface SAMU) -->
                                <img src="<?= BASE_URL ?>/assets/images/samu-interventions.png"
                                     alt="Liste des interventions en cours côté SAMU">
                            </div>
                            <div class="solutions-visual-row">
                                <div class="solutions-img-frame" style="--ar:1/1;">
                                    <!-- Emplacement image : flotte ambulances en temps réel -->
                                    <img src="<?= BASE_URL ?>/assets/images/samu-flotte.png"
                                         alt="Flotte d'ambulances en temps réel sur la carte">
                                </div>
                                <div class="solutions-img-frame" style="--ar:1/1;">
                                    <!-- Emplacement image : fiche bilan patient avec électrocardiogramme -->
                                    <img src="<?= BASE_URL ?>/assets/images/samu-fiche-ecg.png"
                                         alt="Fiche bilan patient avec électrocardiogramme vue par le SAMU">
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