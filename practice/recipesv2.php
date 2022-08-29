<?php
$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => 'Il nous faut des flageolets !',
        'author' => 'a.paillaud75@gmail.com',
        'enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => 'Il nous faut de la semoule',
        'author' => 'anne.paillaud@laposte.net',
        'enabled' => true,    
    ],
    [
        'title' => 'Escalope Milanaise',
        'recipe' => 'Il nous faut de la dinde !',
        'author' => 'quentin.paillaud@laposte.net',
        'enabled' => false,    
    ]
]
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des recettes</title>
</head>
<body>
    <div>
        <h1>Affichage des recettes</h1>
        <?php foreach($recipes as $recipe) : ?>
            <?php if ($recipe['enabled']) : ?>

                <article>
                    <h3><?php echo $recipe['title']; ?></h3>
                    <div><?php echo $recipe['recipe']; ?></div>
                    <i><?php echo $recipe['author']; ?></i>
                </article>

            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</body>
</html>