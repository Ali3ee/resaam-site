<?php require_once __DIR__ . '/../config.php'; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design System</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/variables.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
</head>

<body>
    <?php include __DIR__ . '/../templates/header.php'; ?>

    <h1>Exemple h1</h1>
    <h2>Exemple h2</h2>
    <h3>Exemple h3</h3>
    <p class="p1">Paragraphe grand</p>
    <p class="p2">Paragraphe petit</p>
    <div class="icon"><i class="fa-solid fa-paperclip"></i></div>
    <span class="chip-light">Exemple chip</span>
    <div class="chip-dark"><p>Exemple chip</p></div>
    <a href="#" class="button button-blue">Demander une demo</a>
    <a href="#" class="button button-transparent">Nous contacter</a>
    <a href="#" class="button button-transparent-dark">Nous contacter</a>
    <span class="eyebrow-blue">Fonctionnalités</span>
    <span class="eyebrow-yellow">Fonctionnalités</span>
</body>

</html>