<?php

session_start();

include 'koneksi.php';


$nama_dokter = $_POST['nama_dokter'];
$no_hp = $_POST['no_hp'];
$username = $_POST['username'];


$sql = "INSERT INTO `dokter` (`id_dokter`,`nama_dokter`,`no_hp`,`username`) 
		VALUES (NULL,'$nama_dokter','$no_hp','$username');";
	$tambahdata = mysqli_query($koneksi,$sql);

	if (!$tambahdata) {
		
		echo "<script> alert ('Gagal Menambah Data');window.location.href='list.dokter.php';</script>";		
	}
	else{
		
		echo "<script> alert ('Data Ditambahkan');window.location.href='list.dokter.php';</script>";		
	}
	
	


?>