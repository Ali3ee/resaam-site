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
    <title>Foire aux questions</title>
</head>

<body>

    <?php include __DIR__ . '/../templates/header.php'; ?>

    <main>

        <section class="faq-hero">
            <span class="eyebrow-blue">Centre d'aide</span>
            <h1>Questions fréquentes</h1>
            <p class="p1">Retrouvez les réponses aux questions les plus posées sur Resaam — déploiement, sécurité, intégrations et tarifs. Vous ne trouvez pas votre réponse ? <a href="<?= BASE_URL ?>/contact" class="blue"><strong>Contactez notre équipe.</strong></a></p>
        </section>

        <section class="faq-wrapper">
            <div class="faq">

                <div class="faq-filters">
                    <button class="faq-filter active" data-filter="all">Toutes les questions</button>
                    <button class="faq-filter" data-filter="general">Général</button>
                    <button class="faq-filter" data-filter="deploiement">Déploiement</button>
                    <button class="faq-filter" data-filter="securite">Sécurité et conformité</button>
                    <button class="faq-filter" data-filter="integrations">Intégrations</button>
                    <button class="faq-filter" data-filter="tarifs">Tarifs et contrats</button>
                </div>

                <div class="faq-groups">

                    <div class="faq-group" data-category="general">
                        <div class="faq-group-title">
                            <div class="icon"><i class="ti ti-info-circle"></i></div>
                            <h4>Général</h4>
                        </div>
                        <div class="faq-list">
                            <div class="faq-item">
                                <button class="faq-question">
                                    <span>Qui peut utiliser la plateforme Resaam ?</span>
                                    <span class="faq-icon"><i class="ti ti-plus"></i></span>
                                </button>
                                <div class="faq-answer">
                                    <p>Resaam s'adresse aux services de régulation, établissements de santé, sociétés d'ambulance et structures de transport sanitaire, qu'elles soient publiques ou privées.</p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <button class="faq-question">
                                    <span>Quelle est la différence entre UPH et Transport programmé ?</span>
                                    <span class="faq-icon"><i class="ti ti-plus"></i></span>
                                </button>
                                <div class="faq-answer">
                                    <p>UPH gère l'urgence pré-hospitalière en temps réel, tandis que Transport programmé organise les trajets planifiés à l'avance entre établissements.</p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <button class="faq-question">
                                    <span>Resaam fonctionne-t-il sur mobile et tablette ?</span>
                                    <span class="faq-icon"><i class="ti ti-plus"></i></span>
                                </button>
                                <div class="faq-answer">
                                    <p>Oui, la plateforme est accessible depuis un navigateur web sur ordinateur, tablette et smartphone, sans installation nécessaire.</p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <button class="faq-question">
                                    <span>Que se passe-t-il en cas de panne ou de coupure réseau ?</span>
                                    <span class="faq-icon"><i class="ti ti-plus"></i></span>
                                </button>
                                <div class="faq-answer">
                                    <p>Un mode dégradé permet de continuer les opérations essentielles, avec synchronisation automatique des données dès le retour de la connexion.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="faq-group" data-category="deploiement">
                        <div class="faq-group-title">
                            <div class="icon"><i class="ti ti-rocket"></i></div>
                            <h4>Déploiement</h4>
                        </div>
                        <div class="faq-list">
                            <div class="faq-item">
                                <button class="faq-question">
                                    <span>Combien de temps pour déployer Resaam dans mon établissement ?</span>
                                    <span class="faq-icon"><i class="ti ti-plus"></i></span>
                                </button>
                                <div class="faq-answer">
                                    <p>Le déploiement standard prend entre 2 et 6 semaines selon la taille de la structure et le nombre d'intégrations nécessaires.</p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <button class="faq-question">
                                    <span>Comment se déroule la migration de mes données existantes ?</span>
                                    <span class="faq-icon"><i class="ti ti-plus"></i></span>
                                </button>
                                <div class="faq-answer">
                                    <p>Notre équipe technique accompagne l'export, la vérification et l'import de vos données depuis vos outils actuels, sans interruption de service.</p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <button class="faq-question">
                                    <span>Quelle formation est prévue pour les équipes ?</span>
                                    <span class="faq-icon"><i class="ti ti-plus"></i></span>
                                </button>
                                <div class="faq-answer">
                                    <p>Une formation initiale sur site ou à distance est incluse, complétée par des ressources en ligne et un support continu.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="faq-group" data-category="securite">
                        <div class="faq-group-title">
                            <div class="icon"><i class="ti ti-shield-check"></i></div>
                            <h4>Sécurité & conformité</h4>
                        </div>
                        <div class="faq-list">
                            <div class="faq-item">
                                <button class="faq-question">
                                    <span>Mes données de santé sont-elles hébergées en France ?</span>
                                    <span class="faq-icon"><i class="ti ti-plus"></i></span>
                                </button>
                                <div class="faq-answer">
                                    <p>Oui, toutes les données sont hébergées en France chez un hébergeur certifié HDS (Hébergeur de Données de Santé).</p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <button class="faq-question">
                                    <span>Resaam est-il conforme au RGPD ?</span>
                                    <span class="faq-icon"><i class="ti ti-plus"></i></span>
                                </button>
                                <div class="faq-answer">
                                    <p>La plateforme respecte l'ensemble des exigences du RGPD, incluant le droit d'accès, de rectification et de suppression des données.</p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <button class="faq-question">
                                    <span>Comment sont gérés les droits d'accès des utilisateurs ?</span>
                                    <span class="faq-icon"><i class="ti ti-plus"></i></span>
                                </button>
                                <div class="faq-answer">
                                    <p>Chaque utilisateur dispose d'un rôle précis avec des permissions adaptées à sa fonction, gérées par un administrateur habilité.</p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <button class="faq-question">
                                    <span>En cas d'incident, comment est assurée la traçabilité ?</span>
                                    <span class="faq-icon"><i class="ti ti-plus"></i></span>
                                </button>
                                <div class="faq-answer">
                                    <p>Toutes les actions sont journalisées avec horodatage et identification de l'utilisateur, consultables à tout moment.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="faq-group" data-category="integrations">
                        <div class="faq-group-title">
                            <div class="icon"><i class="ti ti-plug-connected"></i></div>
                            <h4>Intégrations</h4>
                        </div>
                        <div class="faq-list">
                            <div class="faq-item">
                                <button class="faq-question">
                                    <span>Resaam s'intègre-t-il à mon logiciel métier existant ?</span>
                                    <span class="faq-icon"><i class="ti ti-plus"></i></span>
                                </button>
                                <div class="faq-answer">
                                    <p>Oui, la plateforme propose des connecteurs standards ainsi que des API pour s'intégrer à vos outils métiers existants.</p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <button class="faq-question">
                                    <span>Resaam peut-il communiquer avec les DPI hospitaliers ?</span>
                                    <span class="faq-icon"><i class="ti ti-plus"></i></span>
                                </button>
                                <div class="faq-answer">
                                    <p>Des interfaces dédiées permettent l'échange d'informations avec les principaux dossiers patients informatisés du marché.</p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <button class="faq-question">
                                    <span>Proposez-vous une connexion à la géolocalisation des véhicules ?</span>
                                    <span class="faq-icon"><i class="ti ti-plus"></i></span>
                                </button>
                                <div class="faq-answer">
                                    <p>Oui, Resaam se connecte aux principales solutions de géolocalisation pour suivre les véhicules en temps réel.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="faq-group" data-category="tarifs">
                        <div class="faq-group-title">
                            <div class="icon"><i class="ti ti-file-invoice"></i></div>
                            <h4>Tarifs & contrats</h4>
                        </div>
                        <div class="faq-list">
                            <div class="faq-item">
                                <button class="faq-question">
                                    <span>Y a-t-il un engagement de durée minimum ?</span>
                                    <span class="faq-icon"><i class="ti ti-plus"></i></span>
                                </button>
                                <div class="faq-answer">
                                    <p>Nos contrats standards sont proposés sans engagement de durée minimum, avec une résiliation possible à tout moment.</p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <button class="faq-question">
                                    <span>Comment est calculé le tarif d'un abonnement Resaam ?</span>
                                    <span class="faq-icon"><i class="ti ti-plus"></i></span>
                                </button>
                                <div class="faq-answer">
                                    <p>Le tarif dépend du nombre d'utilisateurs, des modules activés et de la taille de votre structure. Contactez-nous pour un devis personnalisé.</p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <button class="faq-question">
                                    <span>Puis-je tester Resaam avant de m'engager ?</span>
                                    <span class="faq-icon"><i class="ti ti-plus"></i></span>
                                </button>
                                <div class="faq-answer">
                                    <p>Une période d'essai ou une démonstration personnalisée peut être organisée avec notre équipe commerciale.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <p class="faq-empty" style="display:none;">Aucune question ne correspond à cette catégorie.</p>

            </div>
        </section>

    </main>

    <?php include __DIR__ . '/../templates/footer.php'; ?>

    <script src="<?= BASE_URL ?>/assets/js/app.js"></script>
</body>

</html>