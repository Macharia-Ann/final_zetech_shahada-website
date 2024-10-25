<?php
session_start();



session_destroy();

//redirect back to homepage
header("Location:home.php");

?>