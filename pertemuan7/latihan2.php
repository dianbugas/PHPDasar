<?php 
	if( !isset($_GET["nama"]) ||
		!isset($_GET["nrp"])){
header("Location: latihan1.php");
exit;
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Dafta Profile</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>
	<li><?= $_GET["nama"]; ?></li>
	<li><?= $_GET["nrp"];  ?></li>
	<a href="latihan1.php">kembali ke daftar Mahasiswa</a>
</body>
</html>