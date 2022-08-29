<?php include('check.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reception formulaire</title>
</head>
<body>
    <h3>Reception formulaire</h3>

    <p>Votre pseudo est: </p>
        <?php echo $_GET['name'] ?>
    <p>Votre email est: </p>
        <?php echo $_GET['email'] ?>
    <p>La valeur de checkbox est: </p>
        <?php if (!isset($_GET['checkbox'])) {
            echo('La variable nest pas défini');
        } else {
            echo('La valeur de la variable checkbox est ' . $_GET['checkbox']);
        } ?>
</body>
</html>