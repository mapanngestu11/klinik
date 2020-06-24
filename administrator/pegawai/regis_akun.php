<?php

session_start();

include 'koneksi.php';


   	$nama  	= $_POST['nama'];
    $username  		= $_POST['username'];
    $password       = $_POST['password']; 	
    $hak_akses       = $_POST['hak_akses'];	
    $pass = md5($password);
    $kode_user = $_POST['kode_user'];


$sql = "INSERT INTO `user` (`id_user`,`nama`,`username`, `password`,`kode_user`,`hak_akses`) 
		VALUES (NULL, '$nama','$username','$pass','$kode_user','$hak_akses');";
	$tambahdata = mysqli_query($koneksi,$sql);

	if (!$tambahdata) {
		
		echo "<script> alert ('Gagal Menambah Data');window.location.href='buat_akun.php';</script>";		
	}
	else{
		
		echo "<script> alert ('Data Ditambahkan');window.location.href='list.akun.php';</script>";		
	}
	
	


?>