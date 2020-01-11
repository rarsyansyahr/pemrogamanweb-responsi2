<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Input</title>
</head>
<body>

	<form method="POST" action="#">
		<fieldset>
			<legend>Form Input Data Buku</legend>
			Nama Buku : 
			<input type="text" name="tnama">
			<br><br>
			Jenis Buku : 
			<select name="tjenis">
				<option value="pemrogaman">Pemrogaman</option>
				<option value="sejarah">Sejarah</option>
				<option value="matematik">Matematik</option>
				<option value="lain">Lainnya</option>
			</select>
			<br><br>
			<input type="submit" name="bsubmit" value="SIMPAN">
		</fieldset>
	</form>

</body>
</html>