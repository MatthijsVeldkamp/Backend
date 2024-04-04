<?php

$page = $_GET['page'];

?>

<!doctype html>
<html lang="nl">
<head>
  <meta charset="utf-8">
  <title>Lab 2 - Includes en require</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
	<!-- laad hier via php je header in (vanuit je includes map) -->
  <?php include 'includes/header.php'; ?>

	<!-- laad hier via php de juiste contentpagina in (vanuit de pages map) in. Welke geselecteerd moet worden kun je uit de URL halen (URL_Params).-->
  <div class="container">
  <?php
  
  if($page == 1){
    include 'pages/onderwerp1.php';
  }
  elseif($page == 2){
    include 'pages/onderwerp2.php';
  }
  elseif($page == 3){
    include 'pages/onderwerp3.php';
  }
  else{
    include 'pages/choosepage.php';
  }
?>
  </div>

	
	<!-- laad hier via php je footer in (vanuit je includes map)-->
  <?php include 'includes/footer.php'; ?>
</body>
</html>