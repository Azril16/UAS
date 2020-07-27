<?php 
	include 'db.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Input Gambar</title>
</head>
<body>
	<div class="semua" align="center">
	<h2>Silahkan Input Gambar</h2>
	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>File</td>
				<td>:</td>
				<td><input type="file" name="gambar"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="kirim" value="kirim"></td>
			</tr>
		</table>
		<br>
		<a href="data.php">Gambar yang sudah di Upload</a>
	</form>

	<?php 
	if (isset($_POST['kirim'])) {
		$nama = $_POST['nama'];
		$nama_file = $_FILES['gambar']['name'];
		$source = $_FILES['gambar']['tmp_name'];
		$folder = './gambar/';

		move_uploaded_file($source, $folder.$nama_file);
		$insert = mysqli_query($conn, "INSERT INTO tb_gambar VALUES(
			NULL,
			'$nama',
			'$nama_file')");

	if ($insert) {
		echo 'Berhasil Upload';
	}else{
		echo 'Gagal Upload';
	}
	}
	 ?>
</div>
</body>
</html>