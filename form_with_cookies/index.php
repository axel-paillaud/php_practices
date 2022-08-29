<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
    <?php include_once('header.php'); ?>
    <?php include_once('submit_form.php'); ?>
    <?php if (isset($errorMessage)) {
        echo '<br>' . $errorMessage;
    } ?>
    <?php if (!isset($_SESSION['LOGGED_USER'])) : ?>
    <h3>Veuillez vous connecter.</h3>
    <form method="post" action="index.php">
        <input autocomplete="off" type="text" name="email" placeholder="E-mail">
        <input autocomplete="off" type="password" name="password" placeholder="Mot de passe">
        <button type="submit">Se connecter</button>
    </form>
    <?php else : ?>
        <p>Bienvenue, <?php echo $_SESSION['LOGGED_USER'] ?> !</p>
    <?php endif; ?>
</body>
</html>