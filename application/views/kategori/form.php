<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FORM ARTIKEL</title>
</head>
<body>
	<center>
	<h1>Form Kategori</h1>
	<form action="<?php echo site_url('kategori/proses');?>" method="POST">
		<table border="1">
			<tr>
				<td>Nama Kategori</td>
				<td>:</td>
				<td><input type="text" name="nama_kategori" placeholder="nama_kategori" value="<?php echo isset ($dataKategori) ? $dataKategori['nama_kategori']:'';?>"></td>
			</tr>
			<tr>
				<td colspan="3">
					<input type="hidden" name="id_kategori" value="<?php echo isset ($dataKategori) ? $dataKategori['id_kategori'] : '' ;?>">
					<input type="submit" name="submit" value="Simpan">
					<a href="<?= site_url('kategori');?>">Kembali</a>
				</td>
			</tr>
		</table>
	</form>
	</center>

</body>
</html>