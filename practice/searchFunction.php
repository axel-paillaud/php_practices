<?php

$recipe = [
	'title' => 'Cassoulet',
	'recipe' => 'Voila la recette du cassoulet.',
	'author' => 'Axel Paillaud',
];

if(array_key_exists('title', $recipe)) {
	print_r("La clé 'titre' se trouve bien dans la recette !");
}

if(array_key_exists('commentaire', $recipe)) {
	print_r("La clé 'commentaire' existe !");
}

?>
