<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    session_start();
    if (isset($_SESSION['login_error'])) {
        $login = $_SESSION['login_error'];
        unset($_SESSION['login_error']);
    }
    if (isset($_SESSION['name_error'])) {
        $name_error = $_SESSION['name_error'];
        unset($_SESSION['name_error']);
    }
    if (isset($_SESSION['email_error'])) {
        $email_error = $_SESSION['email_error'];
        unset($_SESSION['email_error']);
    }
    ?>
    <div class="container">
        <h3>Vul de volgende info in:</h3>
        <form action="form.php" method="post">
            <div class="text">
                <p style="color:red;">*<?php echo $name_error?></p>
                <input placeholder="Vul hier je naam in" type="text" value="<?php echo $_SESSION['prev_name']?>" id="name" name="name"><br>
                <p style="color:red;">*<?php echo $email_error?></p>
                <input placeholder="Vul hier je email in" type="text" value="<?php echo $_SESSION['prev_email']?>" id="email" name="email"><br>
                <input type="submit" id="submit" value="Verstuur">
            </div>
        </form>
    </div>
</body>
</html>
