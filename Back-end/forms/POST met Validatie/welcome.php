<?php
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8') : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8') : '';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        if(isset($name) && isset($email)){
            ?>
    <div class="data_container">
        <h1>De ingevulde gegevens zijn:</h1>
        <p>Naam: <?php echo $name; ?></p>
        <p>Email: <?php echo $email; ?></p>
    </div>
        <div class="container">
        <h3>Vul de opgevraagde info in:</h3>
        <form method="POST" action="welcome.php">
            <label for="name"></label>
            <input type="text" name="name" id="name" placeholder="Vul je naam in.">
            <label for="email"></label>
            <input type="email" name="email" id="email" placeholder="Vul je email in.">
            <input type="submit" name="submit" id="submit" value="Verstuur formulier">
        </form>
    </div>
    <?php
        }
    ?>
</body>
</html>
