<?php
	$grade = 2;

	switch ($grade)
	{
		case 0:
			echo 'Tu es vraiment un gros nul !!';
		break;

		case 5:
			echo 'Tu es très mauvais.';
		break;

		case 7:
			echo 'Tu es mauvais.';
		break;

		case 10:
			echo 'Tu as pile poil la moyenne, c\'est un peu juste.';
		break;

		case 12:
			echo 'Tu es assez bon.';
		break;

		case 16:
			echo 'Tu te débrouille très bien !';
		break;

		case 20:
			echo 'Excellent travail, c\'est parfait';
		break;

		default:
			echo 'Désolé, je n\'ai pas de message à afficher pour cette note';
	}
?>
