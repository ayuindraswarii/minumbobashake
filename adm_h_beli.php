<?php 
	include 'koneksi.php';

	$kode_beli = $_GET['kode_beli'];
	$h = mysqli_query($konek,"DELETE from beli where kode_beli='$kode_beli'");

	if($h){
		echo "<script>alert('Sukses Hapus');location.href='adm_beli.php?pesan=hapus';</script>";
	}else{
		echo "<script>alert('Gagal Hapus');location.href='adm_beli.php';</script>";
	}
	 
	 
?>