<?php
include "conn.php";
$ID=$_REQUEST['ID_Admin'];
$Uname=$_REQUEST['user'];
$Password=$_REQUEST['password'];
 
mysqli_query($con,"INSERT INTO dataadmin (idAdmin, uname,password)
VALUE ('$ID', '$Uname', '$Password')");
header('location:menu.php');
?>