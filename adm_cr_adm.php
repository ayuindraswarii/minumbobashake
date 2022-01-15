<?php
		
		include 'koneksi.php';

		$id_user = $_POST['id_user'];
		$nama_user = $_POST['nama_user'];
		$booth = $_POST['booth'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$level = $_POST['level'];

		mysqli_query($konek, "INSERT INTO user (id_user,nama_user,booth,username,password,level) values ('$id_user','$nama_user','$booth','$username','$password','$level')");
		
		header("location:adm_adm.php");
	?>