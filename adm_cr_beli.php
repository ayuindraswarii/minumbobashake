<?php
		
		include 'koneksi.php';

		$id_user = $_POST['id_user'];
		$kode_beli = $_POST['kode_beli'];
		$tgl = $_POST['tgl'];
		$nama_barang = $_POST['nama_barang'];
		$jumlah = $_POST['jumlah'];
		$harga = $_POST['harga'];
		$total = $_POST['total'];

		mysqli_query($konek, "INSERT INTO beli (id_user,kode_beli,tgl,nama_barang,jumlah,harga,total) values ('$id_user','$kode_beli','$tgl','$nama_barang','$jumlah','$harga','$total')");
		
		header("location:adm_beli.php");
	?>