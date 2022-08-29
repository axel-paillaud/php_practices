<?php


$sql_add_recipe = 'INSERT INTO recipes (title, recipe, author, is_enabled) VALUES (:title, :recipe, :author, :is_enabled)';

//préparation
$insertRecipe = $mysqlClient->prepare($sql_add_recipe);

//ajout de la recette
$insertRecipe->execute(
    [
        'title' => $title_recipe,
        'recipe' => $description_recipe,
        'author' => $_SESSION['LOGGED_USER'],
        'is_enabled' => true,
    ]
    );

?>