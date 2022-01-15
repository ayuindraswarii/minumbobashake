<?php 
include 'koneksi.php';

		$kode_minuman = $_POST['kode_minuman'];
		$nama_minuman = $_POST['nama_minuman'];
		$kode_bahan = $_POST['kode_bahan'];
		$harga = $_POST['harga'];

	$e = mysqli_query($konek, "UPDATE minuman set nama_minuman='$nama_minuman', kode_bahan='$kode_bahan', harga='$harga' where kode_minuman='$kode_minuman'");

	if($e){
		echo "<script>alert('Sukses Update');location.href='adm_minum.php?pesan=update';</script>";
	}else{
		echo "<script>alert('Gagal Update');location.href='adm_minum.php';</script>";
	}

?>