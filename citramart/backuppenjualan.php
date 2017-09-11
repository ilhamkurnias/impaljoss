<?php
include "koneksi.php";

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

$NamaBarang    		=$_REQUEST['NamaBarang'];
$KodeBarang			=$_REQUEST['KodeBarang'];
$Jumlah				=$_REQUEST['Jumlah'];

  
mysqli_query($koneksi,"INSERT INTO backuppenjualan (NamaBarang, KodeBarang, Jumlah)
 VALUE ('$NamaBarang', '$KodeBarang', '$Jumlah')");

?>