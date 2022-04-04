<?php
include "koneksi.php";

$kode = $_POST['kode'];
$nama = $_POST['nama'];

$sql = "INSERT into tbl_052 values ('$kode','$nama')";
$hasil = mysqli_query($koneksi,$sql);
if(!$hasil){
	echo "Penambahan Data Gagal";
} else {
	echo "Penambahan Data Berhasil <br>";
	echo "<a href='tbl_052.php'> Show Data</a>";
}
?>