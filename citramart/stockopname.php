
<!DOCTYPE html>
<htm lang="en">
<head>
	<title>Citramart</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="barang.css">
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
			  <li><a href="menubarang.php">Pengelolaan Barang</a></li>
			  <li class="active">Pengadaan Barang</li>
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
					<table>
					  <tr>
					    <th>Company</th>
					    <th>Contact</th>
					    <th>Country</th>
					  </tr>
					  <tr>
					    <td>Alfreds Futterkiste</td>
					    <td>Maria Anders</td>
					    <td>Germany</td>
					  </tr>
					  <tr>
					    <td>Centro comercial Moctezuma</td>
					    <td>Francisco Chang</td>
					    <td>Mexico</td>
					  </tr>
					  <tr>
					    <td>Ernst Handel</td>
					    <td>Roland Mendel</td>
					    <td>Austria</td>
					  </tr>
					  <tr>
					    <td>Island Trading</td>
					    <td>Helen Bennett</td>
					    <td>UK</td>
					  </tr>
					  <tr>
					    <td>Laughing Bacchus Winecellars</td>
					    <td>Yoshi Tannamuri</td>
					    <td>Canada</td>
					  </tr>
					  <tr>
					    <td>Magazzini Alimentari Riuniti</td>
					    <td>Giovanni Rovelli</td>
					    <td>Italy</td>
					  </tr>
					</table>
				</div>
				<div class=col-md-6>
				<form method="post" action="tambahbarang.php">
				<h1 class="kiri">Stok Baru</h1><br>
				<div class="form-group">
				    <label for="exampleInputEmail1">ID Admin</label>
				    <input class="form-control" placeholder="Enter ID" name="IDAdmin">
				    <small id="emailHelp" class="form-text text-muted">ID Admin yang memasukan data barang</small>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Kode Barang</label>
				    <input type="text" class="form-control" name="KodeBarang" placeholder="Kode Barang">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Nama Barang</label>
				    <input type="text" class="form-control" name="NamaBarang" placeholder="Nama Barang">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Jumlah</label>
				    <input type="text" class="form-control" name="Jumlah" placeholder="Metode Pembayaran">
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
