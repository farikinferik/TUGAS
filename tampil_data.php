<!DOCTYPE html>
<html>
<head>
	<title>Tampilkan Data</title>
	 <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h3>Bimbingan Skripsi Online DINUS</h3>
		<ul class="nav nav-tabs">
				<li><a href="registrasi.html">Registrasi</a></li>
				<li class="active"><a href="#">Daftar Mahasiswa</a></li>
		</ul>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3>Daftar Mahasiswa</h3>
			</div>
			<div class="panel-body">
			<?php
			$fs = fopen('save.csv','r') or die("Tidak dapat mebuka file");
				echo "<table class='table table-condensed table-bordered table-striped'> 
					<tr>
						<th>Nama Lengkap</th>
						<th>NIM</th>
						<th>Program Studi</th>
						<th>Jenis Kelamin</th>
						<th>Tempat Lahir</th>
						<th>Tanggal Lahir</th>
						<th>Alamat</th>
						<th>Telepon</th>
						<th>E-mail</th>
						<th>Usename</th>
						<th>Password</th>
					</tr>";
				while (list($nama, $nim, $prodi, $jenkel, $tempat_lahir, $tgl_lahir, $alamat, $telp, $email, $user, $pass) = fgetcsv($fs,1024,',')){
				echo "<tr>".
						"<td>".$nama."</td>".
						"<td>".$nim."</td>".
						"<td>".$prodi."</td>".
						"<td>".$jenkel."</td>".
						"<td>".$tempat_lahir."</td>".
						"<td>".$tgl_lahir."</td>".
						"<td>".$alamat."</td>".
						"<td>".$telp."</td>".
						"<td>".$email."</td>".
						"<td>".$user."</td>".
						"<td>".$pass."</td>".
					"</tr>";
				}
				echo "</table>";
			?>
			</div>
		</div>
	</div>
</body>
</html>