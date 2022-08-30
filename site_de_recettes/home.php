<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="style.css" 
        rel="stylesheet"
    >
    <title>Site de Recettes - Page d'accueil</title>
</head>
<body>
    <div class="main">

    <!-- Navigation -->
    <?php include_once('header.php'); ?>

    <!-- Formulaire de connexion -->
    <?php include_once('login.php'); ?>
        <h1 class="title-big">Site de Recettes !</h1>

        <!-- Plus facile à lire -->
        <?php foreach(get_recipes($recipes, $limit) as $recipe) : ?>
            <article>
                <h3 class="title-recipe"><?php echo($recipe['title']); ?></h3>
                <div><?php echo($recipe['recipe']); ?></div>
                <i><?php echo(display_author($recipe['author'], $users)); ?></i><br>
                <?php if (isset($_SESSION['LOGGED_USER']) && ($_SESSION['LOGGED_USER'] == $recipe['author'])) : ?>
                <form method="get" action="update.php">
                    <button type="submit" name="edit" value="<?php echo $recipe['recipe_id']; ?>" id="edit">Editer la recette</button>
                    <button type="submit"  name="delete" value="<?php echo $recipe['recipe_id']; ?>">Supprimer la recette</button>
                </form>
                <?php endif; ?>
            </article>
            <br>
        <?php endforeach ?>
    </div>

    <?php include_once('footer.php'); ?>
</body>
</html>