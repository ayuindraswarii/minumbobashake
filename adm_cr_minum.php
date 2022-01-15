<?php
		
		include 'koneksi.php';

		$kode_minuman = $_POST['kode_minuman'];
		$nama_minuman = $_POST['nama_minuman'];
		$kode_bahan = $_POST['kode_bahan'];
		$harga = $_POST['harga'];

		mysqli_query($konek, "INSERT INTO minuman (kode_minuman,nama_minuman,kode_bahan,harga) values ('$kode_minuman','$nama_minuman','$kode_bahan','$harga')");
		
		header("location:adm_minum.php");
	?>