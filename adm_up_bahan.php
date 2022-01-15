<?php 
include 'koneksi.php';

		$kode_bahan = $_POST['kode_bahan'];
		$nama_bahan = $_POST['nama_bahan'];

	$e = mysqli_query($konek, "UPDATE bahan set kode_bahan='$kode_bahan', nama_bahan='$nama_bahan' where kode_bahan='$kode_bahan'");

	if($e){
		echo "<script>alert('Sukses Update');location.href='adm_bahan.php?pesan=update';</script>";
	}else{
		echo "<script>alert('Gagal Update');location.href='adm_bahan.php';</script>";
	}

?>