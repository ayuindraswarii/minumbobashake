<?php 
include 'koneksi.php';

	$id_user = $_POST['id_user'];
	$BDC = $_POST['BDC'];
	$BG = $_POST['BG'];
	$CRV = $_POST['CRV'];
	$DC = $_POST['DC'];
	$RV = $_POST['RV'];
	$id_bhn = $_POST['id_bhn'];

	$e = mysqli_query($konek, "UPDATE stok set id_user='$id_user', BDC='$BDC', BG= '$BG', CRV= '$CRV', DC='$DC', RV='$RV', id_bhn='$id_bhn' where id_bhn='$id_bhn'");

	if($e){
		echo "<script>alert('Sukses Update');location.href='emp_bahan.php?pesan=update';</script>";
	}else{
		echo "<script>alert('Gagal Update');location.href='emp_bahan.php';</script>";
	}

?>