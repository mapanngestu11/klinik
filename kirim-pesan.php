<?php

session_start();

include 'koneksi.php';


$nama = $_POST['nama'];
$isi = $_POST['isi'];
$tanggal = date("d-M-Y");
$waktu = date("h:i:s");

$sql = "INSERT INTO `keluhan` (`id_pesan`, `nama`,  `isi`,`tanggal`, `waktu`) 
		VALUES (NULL, '$nama',  '$isi', '$tanggal', '$waktu');";
	$tambahdata = mysqli_query($koneksi,$sql);

	if (!$tambahdata) {
		
		echo "<script> alert ('Gagal Terkirim');window.location.href='index.php';</script>";		
	}
	else{
		
		echo "<script> alert ('Pesan Sudah Terkirim');window.location.href='index.php';</script>";		
	}
	
	


?>