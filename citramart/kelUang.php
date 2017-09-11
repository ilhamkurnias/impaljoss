
<!DOCTYPE html>
<htm lang="en">
<head>
	<title>Citramart</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="kelUang.css">
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
						<li><a href="index.html">Logout</a></li>
					</ul>
				</div>
			</nav>

			<ol class="breadcrumb">
			  <li><a href="menu.php">Home</a></li>
			  <li class="active"><a href="#">Pengelolaan Keuangan</a></li>
			</ol>

			<div class="row">
				<div class="col-md-6">
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
						<table class="col-md-6" align="center">
							<tr><th>NO</th><th>ID KEUANGAN</th><th>KEUNTUNGAN</th><th>KERUGIAN</th><th>HUTANG</th></tr>
							<?php
							include 'conn.php';
							$daftar = mysqli_query($con, "SELECT * from tambahuang");
							$no=1;
							foreach ($daftar as $row){
			echo "<tr>
					<td>$no</td>
					<td>".$row['IDKeuangan']."</td>
					<td>".$row['Keuntungan']."</td>
					<td>".$row['Kerugian']."</td>
					<td>".$row['Hutang']."</td>
						</tr>";
			$no++;
		}
		?>
					</table>
				</div>
				<div class=col-md-6>
				<form method="post" action="tambahuang.php">
				<h1>Data Baru</h1><br>
					<div class="form-group">
				    <label for="exampleInputPassword1"></label><br>
				    <input id="date" type="date" name="Tanggal">
				    <button type="button" class="btn btn-default" aria-label="Right Align">
  						<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
					</button>
				  </div>
				<div class="form-group">
				    <label for="exampleInputEmail1">ID Keuangan</label>
				    <input class="form-control" placeholder="Enter ID" name="IDKeuangan">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Keuntungan</label>
				    <input type="text" class="form-control" name="Keuntungan" placeholder="Keuntungan">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Kerugian</label>
				    <input type="text" class="form-control" name="Kerugian" placeholder="Kerugian">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Hutang</label>
				    <input type="text" class="form-control" name="Hutang" placeholder="Hutang">
				  </div>
				  <input type="submit" value="Tambah"/>
				  <input type="submit" value="Batal" align="right">
				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <!-- <button type="submit" class="btn btn-primary">Batal</button> -->
				</form>
				</div>
			</div>
	</div>
			<div class="footer">
			Copyright &copy; 2017 Citramart
		</div>
</body>
</html>
