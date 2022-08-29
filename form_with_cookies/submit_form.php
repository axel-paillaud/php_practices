<?php

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $errorMessage = 'Vous devez rentrer un email et un mot de passe';
        return;
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMessage = 'Email invalide';
        return;
    }
    else {
        foreach ($users as $user) {
            if ($user['email'] === $email && $user['password'] === $password) {
                $_SESSION['LOGGED_USER'] = $user['name'];
                setcookie(
                    'LOGGED_USER',
                    $_SESSION['LOGGED_USER'],
                    [
                        'expires' => time() + 365*24*3600,
                        'secure' => true,
                        'httponly' => true,
                    ]
                    );
            }
        }
        if (!isset($_SESSION['LOGGED_USER'])) {
            $errorMessage = 'Compte inexistant ou mot de passe incorrect';
        }
    }
}

?>