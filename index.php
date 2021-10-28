<?php require_once __DIR__ .'./movie.db.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php foreach($movies as $movie){; ?>
        <div>Titolo:<?= $movie->getName(); ?></div>
        <div>Anno: <?= $movie->getYear(); ?></div>
        <div>attori principali: <?= $movie->getActor(); ?></div>
        <div>Generi: <?= $movie->getGenre(); ?></div>
        <!-- <div><?= $movie->isRecent(); ?></div> -->
    <?php }; ?>


</body>
</html>