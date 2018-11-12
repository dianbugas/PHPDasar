<!DOCTYPE html>
<html>
<head>
	<title>post</title>
</head>
<body>
	<?php if(isset($_POST["submit"]) ): ?>
		<h2>Selamat datang <?= $_POST["nama"]; ?></h2>
		<h2><?= $_POST["panggil"]; ?></h2>
		<h2><?= $_POST["ttl"]; ?></h2>
		<h2><?= $_POST["alamat"]; ?></h2>
	<?php endif; ?>
	<form action="" method="post">
		Masukkan nama:
		<input type="text" name="nama">
		<br>
		Masukan nama panggilan: 
		<input type="text" name="panggil">
		<br>
		TTL:
		<input type="text" name="ttl">
		<br>
		Alamat:
		<input type="text" name="alamat">
		<button type="submit" name="submit">Kirim!</button>
		
	</form>
</body>
</html>