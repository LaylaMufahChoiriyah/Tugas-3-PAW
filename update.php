<?php
include "koneksi.php";

$kode = $_POST['kode'];
$nama = $_POST['nama'];

$sql = "UPDATE tbl_052 set namaBarang='$nama' where kodeBarang=$kode";
$hasil = mysqli_query($koneksi,$sql);
if(!$hasil){
	echo "Data Gagal Di Update";
} else {
	echo "Data Berhasil Di Update <br>";
	echo "<a href='tbl_052.php'> Show Data </a>";
}
?>