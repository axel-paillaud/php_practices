<?php

$string = 'Voila une phrase ou toutes les lettres \'u\' on été modifiée';

$newString = str_replace('u', 'K', $string);

print_r($newString);

?>
