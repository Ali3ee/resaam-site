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
    <title>À Propos</title>
</head>

<body>

    <?php include __DIR__ . '/../templates/header.php'; ?>

    <main>

        <div class="hero-glow" aria-hidden="true">
            <div class="hero-glow-top"></div>
            <div class="hero-glow-bottom"></div>
        </div>

        <section class="about-hero">
            <span class="eyebrow-blue">À propos de resaam</span>
            <h1>Coordonner les soins, <br>simplifier le terrain.</h1>
            <p class="p1">Une équipe française qui construit, avec les régulateurs et <br>les ambulanciers, l'outil que le transport sanitaire attendait.</p>
        </section>

        <section class="about-story">
            <div class="about-story-inner">

                <div class="story-left">
                    <span class="eyebrow-blue">Notre expertise</span>
                    <h2>Un outil pensé par le terrain, <br><span class="blue">pour le terrain.</span></h2>
                    <p class="p1">Resaam n'est pas né dans un bureau. Il est né dans une ambulance, une nuit, entre deux interventions - puis dans une salle de régulation, un téléphone dans chaque main, à devoir donner un délai qu'on ne connaissait pas.</p>
                    <p class="p1">Notre équipe a passé <strong>trente ans au service de la prise en soin du patient :</strong> dans les équipages, en SMUR aux côtés du SAMU, en régulation, puis à la direction d'exploitation de société d'ambulances. Nous connaissons les deux côtés de l'écran, parce que nous les avons vécus tous les deux. C'est cette expérience qui a été récompensée par le<strong> Prix Innovation de la SFMU</strong>, et c'est elle qui guide chaque fonctionnalité de Resaam : rien de superflu, rien de théorique - <strong>uniquement ce dont le soignant et le régulateur ont réellement besoin.</strong></p>
                </div>

                <div class="story-right">
                    <ol class="timeline">
                        <li class="timeline-item">
                            <span class="timeline-dot"></span>
                            <span class="timeline-year">2023</span>
                            <h4 class="timeline-title">Le constat</h4>
                            <p class="timeline-text">Au sein d'un service de régulation, le déclic : la coordination du transport sanitaire mérite mieux que le téléphone et le papier.</p>
                        </li>
                        <li class="timeline-item">
                            <span class="timeline-dot"></span>
                            <span class="timeline-year">2024</span>
                            <h4 class="timeline-title">Premiers développements</h4>
                            <p class="timeline-text">Une équipe d'ingénieurs et d'anciens régulateurs s'assemble pour concevoir UPH, le premier module dédié à l'urgence pré-hospitalière.</p>
                        </li>
                        <li class="timeline-item">
                            <span class="timeline-dot"></span>
                            <span class="timeline-year">2025</span>
                            <h4 class="timeline-title">Premiers déploiements</h4>
                            <p class="timeline-text">Des établissements de santé et des sociétés d'ambulance rejoignent la plateforme. Le module Transport programmé voit le jour.</p>
                        </li>
                        <li class="timeline-item">
                            <span class="timeline-dot"></span>
                            <span class="timeline-year">Aujourd'hui</span>
                            <h4 class="timeline-title">Une plateforme qui grandit</h4>
                            <p class="timeline-text">Resaam connecte chaque jour des structures de santé partout en France, avec Régulation comme prochaine étape pour les ambulanciers.</p>
                        </li>
                    </ol>
                </div>

            </div>
        </section>

        <section class="mission">
            <div class="mission-inner">

                <div class="titles">
                    <span class="eyebrow-blue">Notre mission</span>
                    <h2>Faire gagner aux équipes de terrain <br>le temps qui compte vraiment.</h2>
                    <p class="p1">Chaque minute passée à chercher un véhicule ou à ressaisir une information est une minute volée au patient. Resaam existe pour remettre cette minute là où elle doit être.</p>
                </div>

                <div class="mission-grid">
                    <div class="mission-card">
                        <div class="icon"><i class="ti ti-clock"></i></div>
                        <h4>Réduire chaque minute perdue</h4>
                        <p>Unifier la prise d'appel, le dispatch et le suivi sur un seul écran, pour que la bonne ressource soit mobilisée sans détour.</p>
                    </div>

                    <div class="mission-card">
                        <div class="icon"><i class="ti ti-shield-check"></i></div>
                        <h4>Sécuriser chaque donnée de santé</h4>
                        <p>Hébergement HDS, chiffrement de bout en bout et traçabilité complète : la confidentialité des patients n'est jamais négociable.</p>
                    </div>

                    <div class="mission-card">
                        <div class="icon"><i class="ti ti-users-group"></i></div>
                        <h4>Connecter tout le parcours</h4>
                        <p>SAMU, ATSU, hôpitaux et ambulanciers sur une même plateforme, pour que l'information circule sans rupture entre les acteurs.</p>
                    </div>
                </div>

            </div>
        </section>

        <section class="valeurs">
            <div class="valeurs-inner">

                <div class="titles">
                    <span class="eyebrow-blue">Nos valeurs</span>
                    <h2>Ce qui guide nos <br>décisions au quotidien.</h2>
                </div>

                <div class="valeurs-box">
                    <div class="valeurs-box-element">
                        <div class="valeurs-icon"><i class="ti ti-shield"></i></div>
                        <h4>Exigence clinique</h4>
                        <p>Chaque fonctionnalité est pensée avec des professionnels du terrain, pas seulement pour eux.</p>
                    </div>

                    <div class="valeurs-box-element">
                        <div class="valeurs-icon"><i class="ti ti-bolt"></i></div>
                        <h4>Réactivité</h4>
                        <p>Une demande, une réponse sous 24h ouvrées. Le terrain n'attend pas, nous non plus.</p>
                    </div>

                    <div class="valeurs-box-element">
                        <div class="valeurs-icon"><i class="ti ti-lock"></i></div>
                        <h4>Confidentialité</h4>
                        <p>Données hébergées en France, certifiées HDS. La confiance se gagne, elle ne se présuppose pas.</p>
                    </div>

                    <div class="valeurs-box-element">
                        <div class="valeurs-icon"><i class="ti ti-users"></i></div>
                        <h4>Proximité</h4>
                        <p>Une équipe accessible, qui accompagne le déploiement de la formation jusqu'à la mise en production.</p>
                    </div>
                </div>

            </div>
        </section>

        <section class="cta-contact">
            <div class="cta-contact-inner">

                <div class="cta-contact-header">
                    <span class="eyebrow-light">Passez à l'étape suivante</span>
                    <h2>Prêt à fiabiliser vos<br>transports sanitaires ?</h2>
                    <p>Nos experts vous présentent Resaam en 30 minutes, adapté à votre contexte et organisation. Aucun engagement.</p>
                </div>

                <div class="cta-form-card">
                    <h3>Demander une démonstration</h3>

                    <form action="#" method="POST" class="cta-form">

                        <div class="cta-form-row">
                            <div class="cta-form-group">
                                <label for="prenom">Prénom</label>
                                <input type="text" id="prenom" name="prenom" placeholder="Jean">
                            </div>
                            <div class="cta-form-group">
                                <label for="nom">Nom</label>
                                <input type="text" id="nom" name="nom" placeholder="Dupont">
                            </div>
                        </div>

                        <div class="cta-form-group">
                            <label for="email">E-mail professionnel</label>
                            <input type="email" id="email" name="email" placeholder="j.dupont@etablissement.fr">
                        </div>

                        <div class="cta-form-row">
                            <div class="cta-form-group">
                                <label for="structure">Établissement / Structure</label>
                                <input type="text" id="structure" name="structure" placeholder="CHU de Versailles">
                            </div>
                            <div class="cta-form-group">
                                <label for="profil">Vous êtes</label>
                                <select id="profil" name="profil">
                                    <option value="" selected disabled>— Votre profil —</option>
                                    <option value="hopital">Hôpital</option>
                                    <option value="samu">SAMU / ATSU</option>
                                    <option value="ambulance">Société d'ambulances</option>
                                    <option value="autre">Autre</option>
                                </select>
                            </div>
                        </div>

                        <div class="cta-form-group">
                            <label for="message">Message (optionnel)</label>
                            <textarea id="message" name="message" rows="3" placeholder="Décrivez brièvement votre contexte..."></textarea>
                        </div>

                        <button type="submit" class="button button-blue cta-form-submit">Envoyer ma demande</button>

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