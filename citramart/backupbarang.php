<?php
include "koneksi.php";

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

$IDAdmin			=$_REQUEST['IDAdmin'];
$KodeBarang			=$_REQUEST['KodeBarang'];
$NamaBarang    		=$_REQUEST['NamaBarang'];
$TanggalExpired  	=$_REQUEST['TanggalExpired'];
$MetodePembayaran 	=$_REQUEST['MetodePembayaran'];

  
mysqli_query($koneksi,"INSERT INTO backupbarang (IDAdmin, KodeBarang, NamaBarang, TanggalExpired, MetodePembayaran)
 VALUE ('$IDAdmin', '$KodeBarang', '$NamaBarang','$TanggalExpired', '$MetodePembayaran')");

?>