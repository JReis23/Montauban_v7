<html>

<head>
    <meta name="description" content="Logiciel de gestion de process Montauban">
    <meta charset="utf-8">
    <title>Montauban Developpement</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <?php
    // Fichier scriptbefore qui regroupe tous les script qui doit etre chargé avant la page
    include './assets/js/scriptbefore.html';
    // Fichier css.html qui regroupe tous les css
    include './assets/css/css.html';
    ?>
</head>

<body>
    <?php
    // templates qui regroupe les pages visible
    include './templates/header.html';
    include './templates/contact_client.html';
    ?>
    <?php
    // Fichier script qui regroupe tous les script qui doivent etre chargé après le chargement de la page
    include './assets/js/script.html';
    ?>
    <script src="mynotif.js"></script>
</body>

</html>