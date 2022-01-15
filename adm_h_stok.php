<?php 
	include 'koneksi.php';

	$id_bhn = $_GET['id_bhn'];
	$h = mysqli_query($konek,"DELETE from stok where id_bhn='$id_bhn'");

	if($h){
		echo "<script>alert('Sukses Hapus');location.href='adm_stok.php?pesan=hapus';</script>";
	}else{
		echo "<script>alert('Gagal Hapus');location.href='adm_stok.php';</script>";
	}
	 
	 
?>