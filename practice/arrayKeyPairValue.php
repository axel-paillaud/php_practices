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

echo $recipes['author'];
echo "\n";

foreach ($recipes2 as $property => $propertyValue) {
	echo $property . ' vaut ' . $propertyValue . "\n";
}

print_r($recipes2);
print_r("Hello\n");

?>
