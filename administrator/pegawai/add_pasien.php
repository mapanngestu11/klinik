<?php

session_start();

include 'koneksi.php';

$nama = $_POST['nama'];
$nama_dokter = $_POST['nama_dokter'];
$penyakit = $_POST['penyakit'];

$tanggal = date("d-M-Y");
$waktu = date("h:i:s");

$sql = "INSERT INTO `rekam_medis` (`id_data`,`nama`,`nama_dokter`, `penyakit`,`status`,`tanggal`, `waktu`) 
		VALUES (NULL,'$nama','$nama_dokter','$penyakit','tunggu','$tanggal','$waktu');";
	$tambahdata = mysqli_query($koneksi,$sql);

	if (!$tambahdata) {
		
		echo "<script> alert ('Gagal Menambah Data');window.location.href='pendataan_pasien.php';</script>";		
	}
	else{
		
		echo "<script> alert ('Data Ditambahkan');window.location.href='pendataan_pasien.php';</script>";		
	}
	
	


?>