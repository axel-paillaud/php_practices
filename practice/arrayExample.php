<?php

//array with index
$recipes = ['Cassoulet', 'Couscous', 'Escalope Milanaise', 'Salade César',];

//with function array
$recipes = array('Cassoulet', 'Couscous', 'Escalope Milanaise', 'Salade César',);

//one by one
$recipes[0] = 'Cassoulet';
$recipes[1] = 'Couscous';
$recipes[2] = 'Escalope Milanaise';

//let php add element to the array
$recipes[] = 'Cassoulet';
$recipes[] = 'Couscous';
$recipes[] = 'Escalope Milanaise';

echo $recipes[1]; //print 'Couscous';
?>

<br />

<?php

foreach ($recipes as $value) {
	echo $value . "\n";
}

?>
