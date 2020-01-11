<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RESPONSI 2</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div id="container">
		<form method="POST" action="#" method="GET">
			<div id="header">
				<input type="search" name="tcari" id="search" placeholder="Pencarian">
			</div>
		</form>
		<div id="content">
			<div class="item">
				<img src="<?php echo "pemrogaman.jpg"; ?>">
				<div class="item-text">
					<label><?php echo ucfirst("Pemrogaman"); ?></label>
					<p><?php echo "Pemrogaman Web"; ?></p>
					<div>
						<button class="tombol edit">Edit</button>
						<button class="tombol hapus">Hapus</button>
					</div>
				</div>
			</div>
		</div>

		<div id="tambah">
			<a href="form_input.php" class="tombol tambah">+ Tambah Data Buku</a>
		</div>

		<div id="footer">
			<a href="#">&copy; Copyright 2019 - TI 18X (18.11.0xxx)</a>
		</div>
	</div>

	<script type="text/javascript" src="script.js"></script>
</body>
</html>