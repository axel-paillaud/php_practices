<?php session_start();

include_once('config/mysql.php');

if (key($_GET) == 'edit') {
    $edit = true;
    $delete = false;
    $id = $_GET['edit'];
}
elseif (key($_GET) == 'delete') {
    $delete = true;
    $edit = false;
    $id = $_GET['delete'];
}

if (isset($id)) {
    $_SESSION['recipe_id'] = $id;
}

$sqlQueryGetAuthor = 'SELECT author FROM recipes WHERE recipe_id = :id';
$idCheckStatement = $mysqlClient->prepare($sqlQueryGetAuthor);
$idCheckStatement->execute(
    [
        'id' => $id,
    ]
    );
$idCheck = $idCheckStatement->fetch();

if ($idCheck['author'] == $_SESSION['LOGGED_USER']) {
    $sqlQueryGetRecipeAndTitle = 'SELECT recipe, title FROM recipes WHERE recipe_id = :id';
    $getRecipeAndTitleStatement = $mysqlClient->prepare($sqlQueryGetRecipeAndTitle);
    $getRecipeAndTitleStatement->execute(
        [
            'id' => $id,
        ]);
    $recipeAndTitle = $getRecipeAndTitleStatement->fetch();
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
    <?php if ($edit) : ?>
        <title>Editer une recette</title>
    <?php elseif ($delete) : ?>
        <title>Supprimer une recette</title>
    <?php endif; ?>
</head>
<body class="d-flex flex-column min-vh-100">
        <div class="container">
            <?php include_once('header.php'); ?>
            <?php if ($edit) : ?>
                <form method="post" action="post_update.php">
                    <div class="mb-3">
                        <label class="form-label">Titre de la recette</label>
                        <input class="form-control" autocomplete="off" type="text" name="title_recipe" value="<?php echo $recipeAndTitle['title']; ?>">
                    </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" autocomplete="off" type="text" name="recipe"><?php echo $recipeAndTitle['recipe']; ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Editer la recette</button>
                </form>
    <?php elseif ($delete) : ?>
    <br>
        <p>Êtes vous sûr de vouloir supprimer la recette ? Cette action est irreversible.</p>
        <form action="post_delete.php" method="get">
            <button type="submit" name="delete" class="btn btn-danger" value="<?php echo $id ?>">Supprimer définitivement la recette</button>
        </form>
    <?php else : ?>
        <p> Une erreur a été rencontrée, veuillez recommencer.</p>
    <?php endif; ?>
        </div>
    <?php include_once('footer.php'); ?>
</body>
</html>