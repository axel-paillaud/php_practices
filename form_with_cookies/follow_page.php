<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
</head>
<body>
    <?php include_once('header.php'); ?>

    <?php if (isset($_SESSION['LOGGED_USER'])) : ?>
        <p>Bienvenue, <?php echo $_SESSION['LOGGED_USER']; ?> !</p>
    <?php else : ?>
        <p>Veuillez vous connecter pour voir le contenu. <a href="index.php">retour à la page d'acceuil</a></p>
    <?php endif; ?>
</body>
</html>