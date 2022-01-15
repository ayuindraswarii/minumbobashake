<?php 
include 'koneksi.php';

	$id_user = $_POST['id_user'];
	$no_nota = $_POST['no_nota'];
	$tgl = $_POST['tgl'];
	$nama_pembeli = $_POST['nama_pembeli'];
	$kode_minuman = $_POST['kode_minuman'];
	$jumlah = $_POST['jumlah'];
	$total = $_POST['total'];

	$e = mysqli_query($konek, "UPDATE jual set tgl='$tgl', nama_pembeli= '$nama_pembeli', kode_minuman= '$kode_minuman', jumlah='$jumlah', total='$total' where no_nota='$no_nota'");

	if($e){
		echo "<script>alert('Sukses Update');location.href='emp_jual.php?pesan=update';</script>";
	}else{
		echo "<script>alert('Gagal Update');location.href='emp_jual.php';</script>";
	}

?>