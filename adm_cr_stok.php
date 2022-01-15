<?php
		
		include 'koneksi.php';

		$id_user = $_POST['id_user'];
		$BDC = $_POST['BDC'];
		$BG = $_POST['BG'];
		$CRV = $_POST['CRV'];
		$DC = $_POST['DC'];
		$RV = $_POST['RV'];

		mysqli_query($konek, "INSERT INTO stok (id_user,BDC,BG,CRV,DC,RV) values ('$id_user','$BDC','$BG','$CRV','$DC','$RV')");
		
		header("location:adm_stok.php");
	?>