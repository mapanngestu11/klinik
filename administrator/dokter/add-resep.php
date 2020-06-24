<?php

session_start();

include 'koneksi.php';


$nama_dokter = $_POST['nama_dokter'];
$nama_pasien  = $_POST['nama_pasien'];
$resep = $_POST['resep'];
$tanggal = date("d-M-Y");
$waktu = date("h:i:s");




$sql = "INSERT INTO `resep` (`id_resep`,`nama_dokter`,`nama_pasien`,`resep`,`tanggal`,`waktu`) 
		VALUES (NULL,'$nama_dokter','$nama_pasien','$resep','$tanggal','$waktu');";
	$tambahdata = mysqli_query($koneksi,$sql);

	if (!$tambahdata) {
		
		echo "<script> alert ('Gagal Menambah Data');window.location.href='list.resep.php';</script>";		
	}
	else{
		
		echo "<script> alert ('Data Ditambahkan');window.location.href='list.resep.php';</script>";		
	}
	
	


?>