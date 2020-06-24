<?php

session_start();

include 'koneksi.php';
$id_pasien = $_POST ['id_pasien'];
$kode_pasien = $_POST['kode_pasien'];
$nama = $_POST['nama'];
$nik = $_POST['nik'];
$usia = $_POST['usia'];
$jenkel = $_POST['jenkel'];
$keterangan = $_POST ['keterangan'];
$alamat = $_POST['alamat'];
$tanggal = date("d-M-Y");
$waktu = date("h:i:s");


	$sql = "UPDATE `pasien` SET `nama` = '$nama', `kode_pasien` = '$kode_pasien', `nik` = '$nik', `usia` = '$usia', `jenkel` = '$jenkel', 
			`alamat` = '$alamat', `tanggal` = '$tanggal', `waktu` = '$waktu',`keterangan` = '$keterangan' WHERE `pasien`.`id_pasien` = $id_pasien";

	$tambahdata=mysqli_query($koneksi,$sql);

		if (!$tambahdata) {
		
		echo "<script> alert ('Gagal Di Ubah');window.location.href='detail_pasien.php';</script>";		
	}
	else{
		
		echo "<script> alert ('Data Pasien Sudah Di ubah  . .');window.location.href='list.pasien.php';</script>";		
	}



?>