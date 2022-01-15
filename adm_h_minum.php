<?php 
	include 'koneksi.php';

	$kode_minuman = $_GET['kode_minuman'];
	$h = mysqli_query($konek,"DELETE from minuman where kode_minuman='$kode_minuman'");

	if($h){
		echo "<script>alert('Sukses Hapus');location.href='adm_minum.php?pesan=hapus';</script>";
	}else{
		echo "<script>alert('Gagal Hapus');location.href='adm_minum.php';</script>";
	}
	 
	 
?>