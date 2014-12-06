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
				<li><a href="tampil_data.php">Daftar Mahasiswa</a></li>
		</ul>
		<?php
			$nama = $_POST['nama'];
			$nim = $_POST['nim'];	
			$prodi = $_POST['prodi'];
			$jenkel = $_POST['jenkel'];
			$tempat_lahir = $_POST['tempat_lahir'];
			$tgl_lahir = $_POST['tgl_lahir'];
			$alamat = $_POST['alamat'];
			$telp = $_POST['telp'];
			$email = $_POST['email'];
			$user = $_POST['user'];
			$pass = $_POST['pass'];
			
			$outputstring = $nama.",".$nim.",".$prodi.",".$jenkel.",".$tempat_lahir.",".$tgl_lahir.","
			.$alamat.",".$telp.",".$email.",".$user.",".$pass."\n";

			$fh = fopen('save.csv', 'a+') or die("Tidak dapat membuka file");

			fwrite($fh, $outputstring, strlen($outputstring));
			fclose($fh);
			echo "
			<div class='well well=lg'>
					<h1>Data tersimpan</h1>
			</div>";
		?>
</body>
</html>