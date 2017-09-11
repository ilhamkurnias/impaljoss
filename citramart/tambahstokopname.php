<?php
include "conn.php";

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

$NamaBarang    		=$_REQUEST['NamaBarang'];
$KodeBarang			=$_REQUEST['KodeBarang'];
$Jumlah				=$_REQUEST['Jumlah'];


mysqli_query($con,"INSERT INTO stock (NamaBarang, KodeBarang, Jumlah)
 VALUE ('$NamaBarang', '$KodeBarang', '$Jumlah')");
header('location:menu.php');


?>
