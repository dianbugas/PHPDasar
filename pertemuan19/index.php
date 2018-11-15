<?php  
session_start();

if(!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
//ORDER BY id DESC
	//koneksi ke database
//$conn = mysqli_connect("localhost", "root", "", "phpdasar");
//ambil data dari tabel mahasiswa
//$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
//
//jika tombol cari  di tekan
if (isset($_POST["cari"]) ){
	$mahasiswa = cari($_POST["keyword"]);


}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<style>
		.loader{
			width: 160px;
			position: absolute;
			top: 100px;
			left: 370px;
			z-index: -1;
			display: none;

		}
	</style>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/script.js"></script>
</head>
<body>
	<a href="logout.php">Logout</a>
	<h1>Daftar Mahasiswa</h1>
	<a href="tambah.php">Tambah data</a>
	<br><br>
	<form action="" method="post">
		<input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencaharian" autocomplete="off" id="keyword">
		<button type="submit" name="cari" id="tombol-cari">Cari</button>
		<img src="img/loader2.gif" class="loader">
	</form>
	<br><br>
	<div id="container">
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
				<a href="ubah.php?id=<?= $row["id"];?>">Ubah</a> | 
				<a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('yakin?');">Hapus</a>
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
	</div>
</body>
</html>