
<?php
include_once 'database.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>shahada</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <div class="menu1">
  <div class="menu">
    <img src="./images/logo.png" class="logo">
    <ul>
      <li><a href="home.php">HOME</a></li>
      <li><a href="graduands.php">GRADUANDS</a></li>

      <li><a href="clearance.php">CLEARANCE</a></li>

      <li><a href="grad.fees.php">GRAD.FEES</a></li>

      <li><a href="dates.php">DATES</a></li>

      <?php 
      if(isset($_SESSION['user_id']))
        echo '<li><a href="logout.php">logout</a></li>
';

      ?>

    </ul>
  </div>
</div>
<div ><h3 class="shahada-header">SHAHADA - ZETECH UNIVERSITY CLEARANCE AND GRADUATION PORTAL.</h3></div>


  

