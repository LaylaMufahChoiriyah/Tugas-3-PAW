<!DOCTYPE html>
<html>
<head>
	<title>Form Edit Data</title>
</head>
<body>
	<?php
		include "koneksi.php";
		$id = $_GET['id'];
		$sql = "SELECT * from tbl_052 where kodeBarang=$id";
		$hasil = mysqli_query($koneksi,$sql);
		while($row =mysqli_fetch_array($hasil))
			{
	?>
	<h2>Form Untuk Edit Data</h2>
	<form method="POST" action="update.php">
		<table border="0">
			<input type="hidden" name="id" value="<?php echo $row['kodeBarang']?>">
			<tr>
				<td><label for="Kode">Kode Barang : </label></td>
				<td><input id="kode" name="kode" type="text" value="<?php echo $row['kodeBarang']?>"/></td>
			</tr>
			<tr>
				<td><label for="nama">Nama Barang : </label></td>
				<td><input id="nama" name="nama" type="text" value="<?php echo $row['namaBarang']?>"/></td>
			</tr>
			<tr>
				<td><input type="submit" value="Update"></td>
			</tr>
		</table>
		<?php
			}
		?>
	</form>
</body>
</html>