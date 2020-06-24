<?php

session_start();

include 'koneksi.php';

	$id_user = $_POST['id_user'];
   	$nama  	= $_POST['nama'];
    $username  		= $_POST['username'];
    $password       = $_POST['password']; 	
    $hak_akses       = $_POST['hak_akses'];	
    $pass = md5($password);
    $kode_user = $_POST['kode_user'];


$sql = "UPDATE `user` SET `nama`='$nama',`username`='$username',`password`='$pass',`kode_user`='$kode_user',`hak_akses`='$hak_akses' 
		 WHERE `user`.`id_user` = $id_user";
	$tambahdata = mysqli_query($koneksi,$sql);

	if (!$tambahdata) {
		
		echo "<script> alert ('Gagal mengubah Data');window.location.href='detail_akun.php';</script>";		
	}
	else{
		
		echo "<script> alert ('Data telah di ubah');window.location.href='list.akun.php';</script>";		
	}
	
	


?>