<?php session_start();

include_once('config/mysql.php');

if (isset($_GET['delete'])) {

    $sqlQueryDeleteRecipe = 'DELETE FROM recipes WHERE recipe_id = :id';
    $deleteRecipe = $mysqlClient->prepare($sqlQueryDeleteRecipe);
    $deleteRecipe->execute([
        'id' => $_GET['delete']
    ]);

} else {
    $error_msg = 'Une erreur est survenue';
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
    <title>Confirmation</title>
</head>
<body class="d-flex flex-column min-vh-100">
        <div class="container">
            <?php include_once('header.php'); ?>
            <?php if (isset($error_msg)) {
                echo $error_msg;
            } else {
                echo 'La recette a été supprimée.';
            }
            ?>
        </div>
    <?php include_once('footer.php'); ?>
</body>
</html>