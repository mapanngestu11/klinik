<?php

session_start();

include 'koneksi.php';

$nama_pasien = $_POST['nama_pasien'];
$nama_dokter = $_POST['nama_dokter'];

$obat1		 = $_POST['obat1'];
$harga1		 = $_POST['harga1'];
$jumlah1		 = $_POST['jumlah1'];

$obat2		= $_POST['obat2'];
$harga2     = $_POST['harga2'];
$jumlah2    = $_POST['jumlah2'];

$obat3      = $_POST['obat3'];
$harga3     = $_POST['harga3'];
$jumlah3    = $_POST['jumlah3'];

$obat4		= $_POST['obat4'];
$harga4		= $_POST['harga4'];
$jumlah4    = $_POST['jumlah4'];

$jumlah_uang  = $_POST['jumlah_uang'];

$tanggal    = date("d-M-Y");
$waktu      = date("h:i:s");




$sql = "INSERT INTO `kwitansi` (`id_kwitansi`,`nama_pasien`,`nama_dokter`,
	`obat1`,`harga1`,`jumlah1`,
	`obat2`,`harga2`,`jumlah2`,
	`obat3`,`harga3`,`jumlah3`,
	`obat4`,`harga4`,`jumlah4`,`jumlah_uang`,`tanggal`,`waktu`) 

VALUES (NULL,'$nama_pasien','$nama_dokter',
	'$obat1','$harga1','$jumlah1',
	'$obat2','$harga2','$jumlah2',
	'$obat3','$harga3','$jumlah3',
	'$obat4','$harga4','$jumlah4','$jumlah_uang','$tanggal','$waktu');";
$tambahdata = mysqli_query($koneksi,$sql);

if (!$tambahdata) {

	echo "<script> alert ('Gagal Menambah Data');window.location.href='add.kwitansi.php ?>';</script>";		
}
else{

	$data = mysqli_query($koneksi,"SELECT * FROM Kwitansi  ");
	while($d = mysqli_fetch_array($data)){


		echo "<script> alert ('Data Ditambahkan');window.location.href='hasil_kwitansi.php?nama_pasien=$d[nama_pasien]';</script>";	

	}

		
}




?>