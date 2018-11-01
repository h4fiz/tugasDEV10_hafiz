<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tugas WEBDEV HAFIZ</title>
</head>
<body>
	<h1>DATA ARTIKEL</h1>
	<a href="<?= site_url().'/artikel/add';?>">Tambah Data</a>
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
		if($dataArtikel){ 
		foreach ($dataArtikel as $key => $value) :?>
		<tr>
			<td><?php echo $key+1  ?></td>
			<td><?php echo $value['judul_artikel'] ?></td>
			<td><?php echo $value['judul_artikel'] ?></td>
			<td><?php echo $value['judul_artikel'] ?></td>
			<td><?php echo $value['judul_artikel'] ?></td>
			<td><a href="<?php echo site_url('artikel/edit/'.$value['id_artikel']);?>">Edit</a>||<a href="<?php echo site_url('artikel/delete/'.$value['id_artikel']);?>"  onclick="return confirm('Apa anda yakin?')">Delete</a></td>
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