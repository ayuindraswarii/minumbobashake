<?php 
	include 'koneksi.php';

	$no_nota = $_GET['no_nota'];
	$h = mysqli_query($konek,"DELETE from jual where no_nota='$no_nota'");

	if($h){
		echo "<script>alert('Sukses Hapus');location.href='adm_jual.php?pesan=hapus';</script>";
	}else{
		echo "<script>alert('Gagal Hapus');location.href='adm_jual.php';</script>";
	}
	 
	 
?>