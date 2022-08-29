<?php

$message = '';

if (!isset($_POST['email']) || !isset($_POST['password'])) {
    $message = 'Email ou mot de passe invalide';
    $log = false;
    exit;
}

$email = $_POST['email'];
$password = $_POST['password'];

if (empty($email) || empty($password)) {
    $message = 'Vous devez rentrer un email et un mot de passe';
    $log = false;
    return;
}
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $message = 'email invalide';
    $log = false;
    return;
}
else {
    $findEmail = false;
    for ($i = 0; $i < 3; $i++) {
        if ($users[$i]['email'] == $email) {
            $findEmail = true;
            if ($users[$i]['password'] == $password) {
                $message = 'Bienvenue, ' . $users[$i]['full_name'] . '!';
                $log = true;
            }
            else {
                $message = 'Mot de passe incorrect';
                $log = false;
            }
        }
    }
    if (!$findEmail) {
        $message = 'L\'utilisateur n\'existe pas ou n\'a pas été trouvé.';
        $log = false;
    }
}


?>