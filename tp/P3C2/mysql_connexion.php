<?php

$db = new PDO(
    'mysql:host=localhost;dbname=we_love_food;charset=utf8',
    'shaun',
    'cRadoc!54',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
);

$recipesStatement = $db->prepare('SELECT * FROM recipes');
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll();

print_r($recipes);

?>