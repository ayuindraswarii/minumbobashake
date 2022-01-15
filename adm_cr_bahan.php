<?php
		
		include 'koneksi.php';

		$kode_bahan = $_POST['kode_bahan'];
		$nama_bahan = $_POST['nama_bahan'];

		mysqli_query($konek, "INSERT INTO bahan (kode_bahan,nama_bahan) values ('$kode_bahan','$nama_bahan')");
		
		header("location:adm_bahan.php");
	?>