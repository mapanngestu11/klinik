<?php

session_start();

include 'koneksi.php';

$kode_pasien = $_POST['kode_pasien'];
$nama = $_POST['nama'];
$nik = $_POST['nik'];
$usia = $_POST['usia'];
$jenkel = $_POST['jenkel'];

$alamat = $_POST['alamat'];
$tanggal = date("d-M-Y");
$waktu = date("h:i:s");

$sql = "INSERT INTO `pasien` (`id_pasien`,`kode_pasien`,`nama`,`nik`, `usia`,`jenkel`,`keterangan`,`alamat`,`tanggal`, `waktu`) 
		VALUES (NULL, '$kode_pasien','$nama','$nik','$usia','$jenkel', 'Sudah Terdaftar','$alamat','$tanggal','$waktu');";
	$tambahdata = mysqli_query($koneksi,$sql);

	if (!$tambahdata) {
		
		echo "<script> alert ('Gagal Menambah Data');window.location.href='pasien_baru.php';</script>";		
	}
	else{
		
		echo "<script> alert ('Data Ditambahkan');window.location.href='list.pasien.php';</script>";		
	}
	
	


?>