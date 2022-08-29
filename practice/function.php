<?php

function add(int $i, int $j) : int
{
	return $i + $j;
}

$result = add(5, 3);

echo 'Si ma fonction fonctionne (lol), doit retourner 8: ' . $result;
echo "\n";

?>
