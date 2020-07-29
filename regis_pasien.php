<?php

session_start();

include 'koneksi.php';
$nik  = $_POST['nik'];
$nama = $_POST['nama'];

$jenkel = $_POST['jenkel'];

$alamat = $_POST['alamat'];
$tanggal = date("d-M-Y");
$waktu = date("h:i:s");

$sql = "INSERT INTO `pasien` (`id_pasien`,`kode_pasien`,`nama`,`nik`, `usia`,`jenkel`,`keterangan`,`alamat`,`tanggal`, `waktu`) 
		VALUES (NULL, NULL,'$nama','$nik',NULL,'$jenkel', 'Tunggu Konfirmasi','$alamat','$tanggal','$waktu');";
	$tambahdata = mysqli_query($koneksi,$sql);

	if (!$tambahdata) {
		
		echo "<script> alert ('Gagal Menambah Data');window.location.href='index.php';</script>";		
	}
	else{
		
		echo "<script> alert ('SUKSES ! ,Tunggu Konfirmasi');window.location.href='index.php';</script>";		
	}
	
	


?>