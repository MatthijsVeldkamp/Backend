<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $_SESSION['prev_name'] = $_POST['name'];
    $_SESSION['prev_email'] = $_POST['email'];
    

    // check if user is empty
    if (!$name) {
        // Set session variable for error message
        $_SESSION['name_error'] = "Vul een naam in.";
    }
    // Check if email is empty
    if (!$email) {
        // Set session variable for error message
        $_SESSION['email_error'] = "Vul een email in.";
        
    }

    if (!$email || !$name) {
        header("Location: formpage.php");
        exit;
    }
    // Check if email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Set session variable for error message
        $_SESSION['email_error'] = "Vul een geldig emailadres in.";
        header("Location: formpage.php");
        exit;
    }
    // if all seems well show the results
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
        <div class="data_container">
            <h1>De ingevulde gegevens zijn:</h1>
            <?php
            $name = htmlspecialchars($name);
            $email = htmlspecialchars($email);
            ?>
            <p>Naam: <?php echo $name; ?></p>
            <p>Email: <?php echo $email; ?></p>
        </div>
    </body>
    </html>
    <?php
}
?>
