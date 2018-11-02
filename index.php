<!DOCTYPE html>
<html>
	<meta charset="utf-8">
<head>
	<title>latihan 1</title>
	<style>
		.warna-baris{
			background-color: warning;
		}
	</style>
</head>
<body>
	<table border="1" cellpadding="10" cellspacing="0">
		<?php for($i = 1; $i <= 5; $i++) : ?>
			<tr>
				<?php for($j =1; $j <= 5; $j++ ) : ?>
					<td><?= "$i, $j"; ?></td>
				<?php endfor; ?>
			</tr>
		<?php endfor; ?>
	</table>
</body>
</html>