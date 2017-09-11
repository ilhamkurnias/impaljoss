<?php
$host="localhost"; //host server
$user="root"; //user login phpMyAdmin
$pass=""; //pass login phpMyAdmin
$db="db_citramart"; //nama database
$con=mysqli_connect($host,$user,$pass,$db);
mysqli_select_db($con,$db);
?>