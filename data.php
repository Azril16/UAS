<?php 
	include 'db.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Data</title>
</head>

<div class="semua">
<body align= "center">
	<h2 align="center">Data Gambar yang TerUpload</h2>
	<a href="input.php">Upload</a>
	<a href="index.php">Awal</a> <br> <br>
	<table border="1" align="center">
		<tr>
			<td>No</td>
			<td>Nama</td>
			<td>Gambar</td>
			<td>Aksi</td>
		</tr>
		<?php 
		$query = mysqli_query($conn, "SELECT * FROM tb_gambar");
		while ($row = mysqli_fetch_array($query)) { 
		?>
		<tr>
			<td><?php echo $row['id_gambar'] ?></td>
			<td><?php echo $row['nama'] ?></td>
			<td><img src="gambar/<?php echo $row['file'] ?>" width= "100px" height= "100px"></td>
			<td>
				<a href="hapus.php?id=<?php echo $row['id_gambar'] ?>">Hapus</a>
			</td>
		</tr>
	<?php } ?>
	</center>
	
</body>
</div>
</html>