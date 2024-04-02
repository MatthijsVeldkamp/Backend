<?php
require 'variables.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    <h1>Variables</h1>
    <p>Voornaam: <?php echo $voornaam; ?></p>
    <p>Achternaam: <?php echo $achternaam; ?></p>
    <p>Fruit:</p>
    <ul>
        <?php foreach ($fruit as $f) : ?>
            <li><?php echo $f; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>