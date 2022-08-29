<?php

if (!isset($_FILES['screenshot']) || $_FILES['screenshot']['error'] != 0) {
    echo ('Une erreur est survenue.<br>');
    if($_FILES['screenshot']['error'] == 1) {
        echo ('Votre fichier fait plus de 2Mo. <br>');
    }
    echo 'erreur n°' . $_FILES['screenshot']['error'];
    exit;
}

$fileScreenshot = $_FILES['screenshot'];

if($fileScreenshot['size'] > 1000000) {
    echo ('Le fichier est trop volumineux. Veuillez sélectionner un fichier dont la taille n\'excede pas 1Mo');
    exit;
}

$fileInfo = pathinfo($fileScreenshot['name']);
$extension = $fileInfo['extension'];
$allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];

if (!in_array($extension, $allowedExtensions)) {
    echo ('Fichier non autorisé.');
    exit;
}

$fileName = $fileInfo['basename'];

move_uploaded_file($fileScreenshot['tmp_name'], 'uploads/' . $fileName);

?>