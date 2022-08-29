<?php

$users = ['Axel Paillaud', 'Anne Paillaud', 'Quentin Paillaud',];

$positionAnne = array_search('Anne Paillaud', $users);

print_r('Anne se trouve en position ' . $positionAnne . "\n");

$check = !in_array('Asdfxel Paillaud', $users);

print_r($check);

?>
