<?php

$recipes = [
	'title' => 'Cassoulet',
	'recipe' => 'Voiçi la recette du cassoulet.',
	'author' => 'a.paillaud75@gmail.com',
	'enabled' => true,
];

//one by one
$recipes2['title'] = 'Cassoulet';
$recipes2['recipe'] = 'Voiçi la recette du cassoulet.';
$recipes2['author'] = 'john.doe@example.com';
$recipe2['enabled'] = true;

echo '<pre>';
print_r($recipes2);
print_r("Hello\n");
echo '</pre>';

?>
