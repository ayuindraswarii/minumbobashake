<?php 
	include 'koneksi.php';

	$kode_bahan = $_GET['kode_bahan'];
	$h = mysqli_query($konek,"DELETE from bahan where kode_bahan='$kode_bahan'");

	if($h){
		echo "<script>alert('Sukses Hapus');location.href='adm_bahan.php?pesan=hapus';</script>";
	}else{
		echo "<script>alert('Gagal Hapus');location.href='adm_bahan.php';</script>";
	}
	 
	 
?>