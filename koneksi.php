<?php 

	$konek = mysqli_connect("localhost","root","","bobashake");

	if (mysqli_connect_error()) {
		echo "Koneksi Database Gagal : " . mysqli_connect_error();
	}

 ?>