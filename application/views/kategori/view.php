<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tugas WEBDEV HAFIZ</title>
</head>
<body>
	<h1>DATA Kategori</h1>
	<a href="<?= site_url().'/kategori/add';?>">Tambah Data</a>
	<table border="1">
		<tr>
			<th>No.</th>
			<th>Nama kategori</th>
			<th>Aksi</th>
		</tr>
		<?php
		if($dataKategori){ 
		foreach ($dataKategori as $key => $value) :?>
		<tr>
			<td><?php echo $key+1  ?></td>
			<td><?php echo $value['nama_kategori'] ?></td>
			<td><a href="<?php echo site_url('kategori/edit/'.$value['id_kategori']);?>">Edit</a>||<a href="<?php echo site_url('kategori/delete/'.$value['id_kategori']);?>"  onclick="return confirm('Apa anda yakin?')">Delete</a></td>
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