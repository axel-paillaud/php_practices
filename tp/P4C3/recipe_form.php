<?php session_start(); ?>
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
    <title>Envoyer une recette</title>
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">
        <?php include_once('header.php'); ?>

        <form method="post" action="submit_recipe.php">
            <div class="mb-3">
                <label class="form-label">Titre de la recette</label>
                <input class="form-control" autocomplete="off" type="text" name="title_recipe">
            </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" autocomplete="off" type="text" name="description_recipe"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer la recette</button>
        </form>
    </div>

    <?php include_once('footer.php'); ?>
</body>
</html>