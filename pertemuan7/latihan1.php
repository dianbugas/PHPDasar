<?php 
	$mahasiswa = [[
		"nama" => "muhammad", 
		"nrp" => "842asd439",
		"email" =>"asdasda",
		"jurusan" =>"dasdasdas",
		"gambar" => "1.png"
	],
	[
	"nama" => "muhammad", 
		"nrp" => "842439das",
		"email" =>"asdasda",
		"jurusan" =>"dasdasdas",
		"gambar" => "9.png"
	],
	[
	"nrp" => "842439asdas",
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
 	<title>GET</title>
 </head>
 <body>
 	<h1>Data Mahasiswa</h1>
 	<ul>
 		<?php foreach ($mahasiswa as $mhs) : ?>
 			<li>
 				<a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>"><?= $mhs["nama"]; ?></a>
 			</li>
		<?php endforeach; ?>
 	</ul>
 </body>
 </html>