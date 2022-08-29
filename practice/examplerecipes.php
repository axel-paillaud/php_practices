<?php

$recipes = [
	['Cassoulet', 'Voici la recette du cassoulet','Axel Paillaud',true],
	['Couscous', 'Voici la recette du couscous','Axel Paillaud',false],
];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Affichage des recettes</title>
</head>
<body>
	<ul>
		<?php for ($lines = 0; $lines <=1; $lines++): ?>
			<li><?php echo $recipes[$lines][0] . ' (' . $recipes[$lines][2] . ')'; ?></li>
		<?php endfor; ?>
	</ul>
</body>
</html>
