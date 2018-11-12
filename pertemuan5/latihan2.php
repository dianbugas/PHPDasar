<?php 
$mahasiswa = [
	["dian", "00382832", "taknik", "email"], ["dian", "00382832", "taknik", "email"], ["dian", "00382832", "taknik", "email"]
 ];
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>latihan 2</title>
</head>
<body>
	<h1>Daftar mahasiswa</h1>
	<ul>
	<?php foreach( $mahasiswa as $mhs) : ?>
		<li>Nama :<?= $mhs[0]; ?></li>
		<li>NRP  :<?= $mhs[1]; ?></li>
		<li>Jurusan: <?= $mhs[2]; ?></li>
		<li>Email :<?= $mhs[3]; ?></li>
	
	<?php endforeach; ?>
</ul>
</body>
</html>