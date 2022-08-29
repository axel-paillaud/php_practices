<?php
$axel = ['Axel Paillaud', 'a.paillaud75@gmail.com', 'mdpSecret', 28];
$anne = ['Anne Paillaud', 'anne.paillaud@laposte.net', 27];

$paillaudFamily = [$axel, $anne];

$email = 2;
$counter = 0;

while($counter < $email)
{
	echo $paillaudFamily[$counter][1] . '<br />';
	$counter++;
}
?>
