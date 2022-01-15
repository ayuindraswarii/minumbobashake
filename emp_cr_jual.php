<?php
		
		include 'koneksi.php';

		$id_user = $_POST['id_user'];
		$no_nota = $_POST['no_nota'];
		$tgl = $_POST['tgl'];
		$nama_pembeli = $_POST['nama_pembeli'];
		$kode_minuman = $_POST['kode_minuman'];
		$jumlah = $_POST['jumlah'];
		$harga = $_POST['harga'];
		$total = $_POST['total'];

		mysqli_query($konek, "INSERT INTO jual (id_user,no_nota,tgl,nama_pembeli,kode_minuman,jumlah,harga,total) values ('$id_user','$no_nota','$tgl','$nama_pembeli','$kode_minuman','$jumlah','$harga','$total')");
		
		header("location:emp_jual.php");
	?>