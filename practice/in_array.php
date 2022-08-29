<?php

$users = [
	['Axel Paillaud', 'a.paillaud75@gmail.com', 28],
	['Anne Paillaud', 'anouk.paillaud@laposte.net', 27],
	['Quentin Paillaud', 'quentinus.paillaud@laposte.net', 23],
];

if (in_array('Axel Paillaud', $users[0])) {
	echo 'Utilisateur trouvé';	
}

?>
