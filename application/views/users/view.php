<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tugas WEBDEV HAFIZ</title>
</head>
<body>
	<h1>DATA USER</h1>
	<a href="<?= site_url().'/users/add';?>">Tambah Data</a>
	<table border="1">
		<tr>
			<th>No.</th>
			<th>Judul Artikel</th>
			<th>Isi Artikel</th>
			<th>Author</th>
			<th>Katerogi</th>
			<th>Aksi</th>
		</tr>
		<?php
		if($dataUsers){ 
		foreach ($dataUsers as $key => $value) :?>
		<tr>
			<td><?php echo $key+1  ?></td>
			<td><?php echo $value['username'] ?></td>
			<td><?php echo $value['nama_user'] ?></td>
			<td>
				<?php
				 if ($value['akses'] == 1) {
					echo "Aktif";
					}elseif ($value['akses'] == 2) {
						echo "Tidak Aktif";
					}
			 	?>
			 </td>
			<td><a href="<?php echo site_url('users/edit/'.$value['id_user']);?>">Edit</a>||<a href="<?php echo site_url('users/delete/'.$value['id_user']);?>"  onclick="return confirm('Apa anda yakin?')">Delete</a></td>
		</tr>
		<?php 
			endforeach;
		}else{
			echo "<tr><td colspan='6'><center>Tidak ada data</center></td></tr>";
		}
		?>
	</table>
</body>
</html>