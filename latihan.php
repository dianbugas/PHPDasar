<?php 
//array
//pengulangan pada array
//for
$angka = [3,24,23,45,23,43,10,12];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>latihan</title>
 	<style type="text/css">
 		.kotak {

 			width: 50px;
 			height: 50px;
 			background-color: aqua;
 			text-align: center;
 			line-height: 50px;
 			margin: 3px;
 			float: left;
 		}
 		.clear {clear: both;}
 	</style>
 </head>
 <body>
 	<?php for( $i = 0; $i < count($angka); $i++ ) { ?>
 		<dir class="kotak"><?= $angka[$i]; ?></dir>
 	<?php } ?>
 	<div class="clear"></div>
 	
 	<?php foreach( $angka as $a) { ?>
 		<div class="kotak"><?= $a; ?></div>
 	<?php } ?>

 	<dir class="clear"></dir>

 	<?php foreach( $angka as $a) : ?>
 		<div class="kotak"><?= $a; ?></div>	
 	<?php endforeach; ?>
 	

 </body>
 </html>