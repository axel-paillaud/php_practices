<?php
	$isAllowed = true;
	$number = 11;

	if($isAllowed)
	{
		echo 'Vous pouvez entrer.';
	}
	elseif($number == 11)
	{
		echo 'Le nombre est égal à 11';
	}
	else
	{
		echo 'Vous ne pouvez pas entrer.';
	}
?>
