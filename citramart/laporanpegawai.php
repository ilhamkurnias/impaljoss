

<html>
<head>
	<title>Citramart</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="laporanpegawai.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<div class="header">
	<h1><img src="TU-logogram.jpg" align="right">CITRAMART
	<br>TELKOMUNIVERSITY</h1>
</div>
<body>
	<div class="sidebar">
				<ul>
					<li><button class="accordion"><a  href="menubarang.php">Pengelolaan Barang</a></button></li>
					<li><button class="accordion"><a  href="kelUang.php">Pengelolaan Keuangan</a></button></li>
					<li><button class="accordion"><a  href="kelPegawai.php">Pengelolaan Pegawai dan Akun</a></button></li>
					<li><button class="accordion"><a  href="menulaporan.php">Laporan Bulanan</a></button></li>
				</ul>
			</div>
	<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"></a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="menu.php">Home<span class="sr-only">(current)</span></a></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</div>
			</nav>

			<ol class="breadcrumb">
			  <li><a href="menu.php">Home</a></li>
				<li><a href="menulaporan.php">laporan</a></li>
				<li><a href="laporanpegawai.php">Laporan Pegawai</a></li>

			</ol>
			<div class="menu" style="text-align: center;">
				<h2>Daftar Pegawai</h2>


<table>
	<tr>
			<th>No</th>
			<th>ID Admin </th>
			<th>Username</th>
			<th>Nama Admin</th>
			</tr>
	<?php
     include 'conn.php';
     $daftar = mysqli_query($con, "SELECT * from dataadmin");
     $no=1;
     foreach ($daftar as $row){
         echo "
						 <tr>
             <td>$no</td>
             <td>".$row['idAdmin']."</td>
             <td>".$row['uname']."</td>
             <td>".$row['namaAdmin']."</td>
               </tr>";
         $no++;
     }
     ?>
</table>

	</div>
			<div class="footer">
			Copyright &copy; 2017 Citramart
		</div>
</body>
</html>
