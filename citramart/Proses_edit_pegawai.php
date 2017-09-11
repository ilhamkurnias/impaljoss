<?php
include "conn.php";
$ID=$_REQUEST['ID_Pegawai'];
$Uname=$_REQUEST['user'];
$Password=$_REQUEST['password'];
 
mysqli_query($con,"INSERT INTO dataPegawai (idPegawai, uname,password)
VALUE ('$ID', '$Uname', '$Password')");
header('location:menu.php');
?>