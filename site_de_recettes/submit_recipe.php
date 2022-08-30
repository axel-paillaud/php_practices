<?php

session_start();

if (isset($_POST['title_recipe']) || isset($_POST['description_recipe'])) {
    $title_recipe = $_POST['title_recipe'];
    $description_recipe = $_POST['description_recipe'];

    if (empty($title_recipe) || empty($description_recipe)) {
        $error_msg = 'Un champ est vide. Vous devez indiquer le titre de la recette ainsi que sa description.';
    }
    elseif (strlen($title_recipe) > 127) {
        $error_msg = 'Le titre de la recette est trop long.';
    }
    //si d'autres conditions/erreur, les mettres ici avec elseif
} else {
    $error_msg = 'Une erreur est survenu. Contacter l\'administrateur pour plus d\'information';
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
    <?php if(!empty($error_msg)) : ?>
        <title>Erreur d'envoi recette</title>
    <?php else : ?>
        <title>Confirmation d'envoi recette</title>
    <?php endif; ?>
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">
    <?php include_once('header.php'); ?>
        <?php if(isset($error_msg)) : ?>
            <br>
            <p> <?php echo $error_msg; ?></p>
            <br>
            <a href="recipe_form.php"><button class="btn btn-primary" href="recipe_form.php">Retour</button></a>
        <?php else : ?>
        <br>
            <h4>Recette bien reçue !</h4>
                <h6><?php echo $title_recipe; ?></h6>
                <br>
                <P><?php echo $description_recipe; ?></p>
                <br>
                <?php include_once('add_recipe.php'); ?>
        <?php endif; ?>
    </div>

    <?php include_once('footer.php'); ?>
</body>
</html>