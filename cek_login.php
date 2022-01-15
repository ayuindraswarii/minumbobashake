<?php
	//panggil koneksi db 
	include "koneksi.php";
	
	$password = $_POST['password'];
	$username = mysqli_escape_string($konek, $_POST['username']);
	$password = mysqli_escape_string($konek, $password);
	$level = mysqli_escape_string($konek, $_POST['level']);

	//cek username, terdaftar atau tidak
	$cek_user = mysqli_query($konek, "SELECT * FROm user WHERE username = '$username' and level = '$level' ");
	$user_valid = mysqli_fetch_array($cek_user);

	//uji jika username terdaftar
	if($user_valid){
		//cek pass sesuai atau tidak
		if($password ==  $user_valid['password']){
			//jika pass sesuai maka buat session
			session_start();
			$_SESSION['id_user'] = $user_valid['id_user'];
			$_SESSION['username'] = $user_valid['username'];
			$_SESSION['nama_user'] = $user_valid['nama_user'];
			$_SESSION['level'] = $user_valid['level'];

			//uji level user
			if($level == "employee"){
				header('location:emp_dash.php');
			}else if($level == "admin"){
				header('location:adm_dash.php');
			}

		}else{
		//jika tidak valid
		echo "<script>alert('Login Gagal, Password tidak sesuai!');document.location='index.php'</script>";
	}

	}else{
		//jika tidak valid
		echo "<script>alert('Login Gagal, Username tidak terdaftar!');document.location='index.php'</script>";
	}

?>