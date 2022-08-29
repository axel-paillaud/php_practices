<?php

$recipes = [
	['Cassoulet', 'La recette du cassoulet', 'axel', true,],
	['Couscous', 'La recette du couscous', 'axel', true,],
];

foreach ($recipes as $recipe) {
	echo$recipe[0]; //affichera Cassoulet, puis couscous.
}

?>
