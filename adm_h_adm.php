<?php 
	include 'koneksi.php';

	$id_user = $_GET['id_user'];
	$h = mysqli_query($konek,"DELETE from user where id_user='$id_user'");

	if($h){
		echo "<script>alert('Sukses Hapus');location.href='adm_adm.php?pesan=hapus';</script>";
	}else{
		echo "<script>alert('Gagal Hapus');location.href='adm_adm.php';</script>";
	}
	 
	 
?>