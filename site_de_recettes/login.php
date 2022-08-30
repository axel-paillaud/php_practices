<?php

$postData = $_POST;

if (isset($postData['email']) &&  isset($postData['password'])) {
    foreach ($users as $user) {
        if (
            $user['email'] === $postData['email'] &&
            $user['password'] === $postData['password']
        ) {
            $loggedUser = [
                'email' => $user['email'],
            ];

            /**
             * Cookie qui expire dans un an
             */
            setcookie(
                'LOGGED_USER',
                $loggedUser['email'],
                [
                    'expires' => time() + 365*24*3600,
                    'secure' => true,
                    'httponly' => true,
                ]
            );

            $_SESSION['LOGGED_USER'] = $loggedUser['email'];
        } else {
            $errorMessage = sprintf('Les informations envoyées ne permettent pas de vous identifier : (%s/%s)',
                $postData['email'],
                $postData['password']
            );
        }
    }
}

// Si le cookie est présent
if (isset($_COOKIE['LOGGED_USER'])) {
    $loggedUser = [
        'email' => $_COOKIE['LOGGED_USER'],
    ];
    $_SESSION['LOGGED_USER'] = $loggedUser['email'];
}

if (isset($_SESSION['LOGGED_USER'])) {
    $loggedUser = [
        'email' => $_SESSION['LOGGED_USER'],
    ];
}
?>

<?php if(!isset($loggedUser)): ?>
<div class="form-login">
    <form action="home.php" method="post">
        <?php if(isset($errorMessage)) : ?>
            <div class="alert alert-danger" role="alert">
                <?php echo($errorMessage); ?>
            </div>
        <?php endif; ?>
        <div class="form-1">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" aria-describedby="email-help" placeholder="you@exemple.com">
            <div class="form-label">L'email utilisé lors de la création de compte.</div>
        </div>
        <div class="form-1">
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password">
        </div>
        <button type="submit">Envoyer</button>
    </form>
</div>
<?php else: ?>
    <div class="alert alert-success" role="alert">
        Bonjour <?php echo($loggedUser['email']); ?> !
    </div>
<?php endif; ?>
