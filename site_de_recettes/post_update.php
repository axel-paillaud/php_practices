<?php

session_start();
include_once('config/mysql.php');

if (isset($_POST['title_recipe']) && isset($_POST['recipe'])) {
    $title_recipe = $_POST['title_recipe'];
    $recipe = $_POST['recipe'];

    if (empty($title_recipe) || empty($recipe)) {
        $error_msg = 'Un des champs est vide. Vous devez rentrer un titre et une description de la recette.';
    }
    elseif (strlen($title_recipe) > 127) {
        $error_msg = 'Le titre de la recette est trop long';
    }
    //ici, update de la recette
    else {
        $sqlQueryUpdateRecipe = 'UPDATE recipes SET title = :title, recipe = :recipe WHERE recipe_id = :id';

        //préparation
        $updateRecipe = $mysqlClient->prepare($sqlQueryUpdateRecipe);

        //exécution
        $updateRecipe->execute([
            'title' => $title_recipe,
            'recipe' => $recipe,
            'id' => $_SESSION['recipe_id']
        ]);
    }
} else {
    $error_msg = 'Une erreur s\'est produite. Veuillez réessayer plus tard.';
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
    <title>Editer une recette - Confirmation</title>
</head>
<body class="d-flex flex-column min-vh-100">
        <div class="container">
            <?php include_once('header.php'); ?>
            <br>
            <?php if (isset($error_msg)) {
                echo $error_msg;
            } else {
                echo 'La recette a été édité avec succès.';
            }
            ?>
            <br>
            <br>
            <a href="home.php"><button class="btn btn-primary">Retour à l'accueil.</button></a>
        </div>
    <?php include_once('footer.php'); ?>
</body>
</html>