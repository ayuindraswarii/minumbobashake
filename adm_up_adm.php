<?php 
include 'koneksi.php';

		$id_user = $_POST['id_user'];
		$nama_user = $_POST['nama_user'];
		$booth = $_POST['booth'];
		$username = $_POST['username'];
		$password = $_POST['password'];

	$e = mysqli_query($konek, "UPDATE user set nama_user='$nama_user', booth= '$booth', username='$username', password='$password' where id_user='$id_user'");

	if($e){
		echo "<script>alert('Sukses Update');location.href='adm_adm.php?pesan=update';</script>";
	}else{
		echo "<script>alert('Gagal Update');location.href='adm_adm.php';</script>";
	}

?>