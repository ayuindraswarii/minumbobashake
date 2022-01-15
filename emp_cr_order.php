<?php
		
		include 'koneksi.php';

		$no_order = $_POST['no_order'];
		$id_user = $_POST['id_user'];
		$BDC = $_POST['BDC'];
		$BG = $_POST['BG'];
		$CRV = $_POST['CRV'];
		$DC = $_POST['DC'];
		$RV = $_POST['RV'];
		$tgl_pesan = $_POST['tgl_pesan'];
		$tgl_ambil = $_POST['tgl_ambil'];

		mysqli_query($konek, "INSERT INTO orderan (no_order, id_user, BDC, BG, CRV, DC, RV, tgl_pesan, tgl_ambil) values ('$no_order','$id_user','$BDC','$BG','$CRV','$DC','$RV','$tgl_pesan', '$tgl_ambil')");
		
		header("location:emp_order.php");
	?>