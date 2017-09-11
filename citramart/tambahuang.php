<?php
include "conn.php";

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));


$Tanggal  			=$_REQUEST['Tanggal'];
$IDKeuangan			=$_REQUEST['IDKeuangan'];
$Keuntungan			=$_REQUEST['Keuntungan'];
$Kerugian    		=$_REQUEST['Kerugian'];
$Hutang			 	=$_REQUEST['Hutang'];


mysqli_query($con,"INSERT INTO tambahuang (Tanggal, IDKeuangan, Keuntungan, Kerugian, Hutang)
 VALUE ('$Tanggal','$IDKeuangan', '$Keuntungan', '$Kerugian','$Hutang')");
header('location:menu.php');


?>
