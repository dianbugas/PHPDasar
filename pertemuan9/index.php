<?php  
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
	//koneksi ke database
//$conn = mysqli_connect("localhost", "root", "", "phpdasar");
//ambil data dari tabel mahasiswa
//$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

?>s
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>Nrp</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>
		</tr>
		<?php $i=1; ?>
		<?php foreach( $mahasiswa as $row) : ?>
		<tr>
			<td><?= $i; ?></td>
			<td>
				<a href="">Ubah</a> | 
				<a href="">Hapus</a>
			</td>
			<td>
				<img src="img/<?= $row["gambar"];?>" whide="50">
			</td>
			<td><?= $row["nrp"]; ?></td>
			<td><?= $row["nama"]; ?></td>
			<td><?= $row["email"]; ?></td>
			<td><?= $row["jurusan"]; ?></td>
		</tr>
		<?php $i++; ?>
	<?php endforeach; ?>

	</table>
</body>
</html>