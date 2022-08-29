<?php

if (!isset($_GET['name']) || !isset($_GET['email']) || !filter_var($_GET['email'], FILTER_VALIDATE_EMAIL) || empty($_GET['name']))
{
    echo('Il faut un email et un pseudo valides pour soumettre le formulaire.');
    exit;
}

?>