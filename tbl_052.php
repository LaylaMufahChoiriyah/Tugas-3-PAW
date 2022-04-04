<!DOCTYPE html>
<html>
<head>
	<title>Tabel Daftar Barang</title>
</head>
<body>
	<table border="2" width="450px">
		<caption><b><h2>Tabel Daftar Barang</h2></b></caption>
		<tr>
			<td><b><center>Kode Barang</center></b></td>
			<td><b><center>Nama Barang</center></b></td>
			<td><b><center>Action</center></b></td>
		</tr>
			<?php
			include "koneksi.php";
			$sql = "SELECT * from tbl_052";
			$hasil = mysqli_query($koneksi,$sql);
			while($row =mysqli_fetch_array($hasil))
			{
			?>
		<tr>
			<td><i><center><?=$row['kodeBarang'];?></center></i></td>
			<td><?=$row['namaBarang'];?></td>
			<td><center><a href="edit_tbl.php?id=<?=$row['kodeBarang']?>">Edit  |  <a href="delete.php?id=<?=$row['kodeBarang']?>"> Delete</center></td>
		<?php
		}
		?>
		</tr>
		<tr>
			<td colspan="3" align="center"><?php
				echo "<a href='tambah_barang.php'>Tambah Data</a>";
			?></td>
		</tr>
	</table>
	
</body>
</html>
