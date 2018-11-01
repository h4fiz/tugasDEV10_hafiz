<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FORM ARTIKEL</title>
</head>
<body>
	<center>
	<h1>Form Artikel Saya</h1>
	<form action="<?php echo site_url('artikel/proses');?>" method="POST">
		<table>
			<tr>
				<td>Judul Artikel</td>
				<td>:</td>
				<td><input type="text" name="judul_artikel" placeholder="judul_artikel" value="<?php echo isset ($data_artikel) ? $data_artikel['judul_artikel']:'';?>"></td>
			</tr>
			<tr>
				<td>Isi Artikel</td>
				<td>:</td>
				<td><input type="text" name="isi_artikel" placeholder="isi_artikel" value="<?php echo isset ($data_artikel) ? $data_artikel['isi_artikel']:'';?>"></td>
			</tr>
			<tr>
				<td>Author Artikel</td>
				<td>:</td>
				<td><select name="id_user">
						<option value="">Pilih User</option>
						<?php foreach ($dataUser as $user) { 
							//kondisi selected
								if (isset($data_artikel) && $data_artikel['id_user'] == $user['id_user']) {
									$selected = 'selected';
								}else {
									$selected = '';
								}
							?>
						<option value="<?php echo $user['id_user'];?>" <?php echo $selected ;?>><?php echo $user['nama_user'];?></option>
						<?php
						} ?>
					</select></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td>:</td>
				<td>
					<select name="id_kategori">
						<option value="">Pilih Kategori</option>
						<?php foreach ($listkategori as $kategori) { 
							//kondisi selected
								if (isset($data_artikel) && $data_artikel['id_kategori'] == $kategori['id_kategori']) {
									$selected = 'selected';
								}else {
									$selected = '';
								}
							?>
						<option value="<?php echo $kategori['id_kategori'];?>" <?php echo $selected ;?>><?php echo $kategori['nama_kategori'];?></option>
						<?php
						} ?>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<input type="hidden" name="id_artikel" value="<?php echo isset ($data_artikel) ? $data_artikel['id_artikel'] : '' ;?>">
					<input type="submit" name="submit" value="Simpan">
					<a href="<?= site_url('artikel');?>">Kembali</a>
				</td>
			</tr>
		</table>
	</form>
	</center>

</body>
</html>