<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FORM ARTIKEL</title>
</head>
<body>
	<center>
	<h1>Form Artikel Saya</h1>
	<form action="<?php echo site_url('users/proses');?>" method="POST">
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="username" value="<?php echo isset ($dataUsers) ? $dataUsers['username']:'';?>"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="password" value="<?php echo isset ($dataUsers) ? $dataUsers['password']:'';?>"></td>
			</tr><tr>
				<td>Nama User</td>
				<td>:</td>
				<td><input type="text" name="nama_user" placeholder="nama_user" value="<?php echo isset ($dataUsers) ? $dataUsers['nama_user']:'';?>"></td>
			</tr>
			<tr>
				<td>Author Artikel</td>
				<td>:</td>
				<td><select name="akses">
						<option value="">Pilih User</option>
						<?php 
							//kondisi selected
								if (isset($dataUsers) && $dataUsers['akses'] == $user['akses']) {
									$selected = 'selected';
								}else {
									$selected = '';
								}
							?>
						<option value="1" <?php echo $selected ;?>>Aktif</option>
						<option value="2" <?php echo $selected ;?>>Tidak Aktif</option>
					</select></td>
			</tr>
			<tr>
				<td colspan="3">
					<input type="hidden" name="id_user" value="<?php echo isset ($dataUsers) ? $dataUsers['id_user'] : '' ;?>">
					<input type="submit" name="submit" value="Simpan">
					<a href="<?= site_url('users');?>">Kembali</a>
				</td>
			</tr>
		</table>
	</form>
	</center>

</body>
</html>