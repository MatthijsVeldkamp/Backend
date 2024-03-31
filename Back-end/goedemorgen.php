<?php

    date_default_timezone_set('Europe/Amsterdam');
    $time = date('H:i');
    $msg = '';
    $background = '';
    if ($time >= '06:00' && $time < '12:00') {
        $msg = 'Goedemorgen';
        $background = 'images/morning.png';
    } elseif ($time >= '12:00' && $time < '18:00') {
        $msg = 'Goedemiddag';
        $background = 'images/afternoon.png';
    } elseif ($time >= '18:00' && $time < '00:00') {
        $msg = 'Goedeavond';
        $background = 'images/evening.png';
    } else {
        $msg = 'Goedenacht';
        $background = 'images/night.png';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $msg?></title>
</head>
<body>
    <img id="myImg" src="<?php echo $background?>">
    <style>
        #myImg {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;

            }
    </style>
</body>
</html>