<?php
	include 'koneksi.php';
	$id=$_GET['id'];

	$sql = "DELETE from tbl_052 where kodeBarang=$id";
	$hasil = mysqli_query($koneksi,$sql);
	if(!$hasil){
		echo "Aksi Delete Gagal";
	} else {
		echo " Aksi Delete Berhasil <br>";
		echo "<a href='tbl_052.php'>Tampilkan Data</a>";
	}
?>