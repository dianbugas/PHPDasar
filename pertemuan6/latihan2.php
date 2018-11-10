<?php 
	//array associative
	$mahasiswa = [[
		"nama" => "muhammad", 
		"nrp" => "842439",
		"email" =>"asdasda",
		"jurusan" =>"dasdasdas",
		"gambar" => "1.png"
	],
	[
	"nama" => "muhammad", 
		"nrp" => "842439",
		"email" =>"asdasda",
		"jurusan" =>"dasdasdas",
		"gambar" => "9.png"
	],
	[
	"nrp" => "842439",
	"email" =>"asdasda",
	"jurusan" =>"dasdasdas",
	"nama" => "muhammad",
	"gambar" => "6.png"
		
	]
	];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Daftar mahasiswa</title>
 	<style>
 		.img{
 			width: 100px;
 			height: 100px;
 		}
 	</style>
 </head>
 <body>
 	<h1>Daftar Mahasiswa</h1>
 	<?php foreach ($mahasiswa as $mhs) : ?>
 		<ul>
 			<li>
 				<img class="img" src="img/<?= $mhs["gambar"]; ?>">
 			</li>
 			<li>Nama:<?= $mhs["nama"]; ?></li>
 			<li>nrp:<?= $mhs["nrp"];  ?></li>
 			<li>jurusan:<?= $mhs["jurusan"]; ?></li>
 			<li>email:<?= $mhs["email"];  ?></li>
 		</ul>
	<?php endforeach; ?>

 </body>
 </html>