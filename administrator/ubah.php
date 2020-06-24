<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$kode_user = $_POST['kode_user'];
$username = $_POST['username'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and kode_user='$kode_user'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
$data = mysqli_fetch_assoc($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

		// buat session login dan username

		$kode_user = $_POST['kode_user'];
		$password  = $_POST['password']; 

		$sql = "UPDATE `user` SET `password` = MD5('$password') WHERE `user`.`kode_user` = $kode_user;";
		$tambahdata = mysqli_query($koneksi,$sql);

		if (!$tambahdata) {
		
		echo "<script> alert ('Gagal mengubah Data');window.location.href='ubah-pass.php';</script>";		
	}
	else{
		
		echo "<script> alert ('Data telah di ubah');window.location.href='index.php';</script>";		
	}
	
	


}else{
	header("location:ubah-pass.php?pesan=gagal");
}

?>