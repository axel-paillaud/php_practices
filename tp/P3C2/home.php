<?php include('mysql_connexion.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Recettes - Page d'accueil</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">

    <?php include_once('header.php'); ?>
        <h1>Site de Recettes !</h1>
        <br><br>

        <?php include('login.php'); ?>
        <?php include('submit_login.php'); ?>


        <?php if ($log) : ?>
            <?php include_once('recipes.php'); ?>
        <?php else : ?>
            <?php include_once('login.php'); ?>
        <?php endif; ?>
        <br>

        <?php echo $message; ?>

    </div>

    <?php include_once('footer.php'); ?>
</body>
</html>