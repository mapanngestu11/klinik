<?php

session_start();

include 'koneksi.php';


$nama_obat = $_POST['nama_obat'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];
$keterangan = $_POST['keterangan'];
$tanggal = date("d-M-Y");


$sql = "INSERT INTO `obat` (`id_obat`,`nama_obat`,`jumlah`,`harga`,`keterangan`,`tanggal`) 
		VALUES (NULL,'$nama_obat','$jumlah','$harga','$keterangan','$tanggal');";
	$tambahdata = mysqli_query($koneksi,$sql);

	if (!$tambahdata) {
		
		echo "<script> alert ('Gagal Menambah Data');window.location.href='list.obat.php';</script>";		
	}
	else{
		
		echo "<script> alert ('Data Ditambahkan');window.location.href='list.obat.php';</script>";		
	}
	
	


?>