<?php 
include 'koneksi.php';

	$kode_beli = $_POST['kode_beli'];
	$tgl = $_POST['tgl'];
	$nama_barang = $_POST['nama_barang'];
	$jumlah = $_POST['jumlah'];
	$harga = $_POST['harga'];
	$total = $_POST['total'];

	$e = mysqli_query($konek, "UPDATE beli set tgl='$tgl', nama_barang= '$nama_barang', jumlah='$jumlah', harga='$harga', total='$total' where kode_beli='$kode_beli'");

	if($e){
		echo "<script>alert('Sukses Update');location.href='adm_beli.php?pesan=update';</script>";
	}else{
		echo "<script>alert('Gagal Update');location.href='adm_beli.php';</script>";
	}

?>