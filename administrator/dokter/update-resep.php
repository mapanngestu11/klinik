<?php

session_start();

include 'koneksi.php';

	$id_resep = $_POST['id_resep'];
   	$nama_dokter  	= $_POST['nama_dokter'];
    $nama_pasien 		= $_POST['nama_pasien'];
    $resep      = $_POST['resep']; 	
    $tanggal = date("d-M-Y");
    $waktu = date("h:i:s");



$sql = "UPDATE `resep` SET `nama_dokter`='$nama_dokter',`nama_pasien`='$nama_pasien',`resep`='$resep',
							`tanggal`='$tanggal',`waktu`='$waktu' 
		 WHERE `resep`.`id_resep` = $id_resep";
	$tambahdata = mysqli_query($koneksi,$sql);

	if (!$tambahdata) {
		
		echo "<script> alert ('Gagal mengubah Data');window.location.href='list.resep.php';</script>";		
	}
	else{
		
		echo "<script> alert ('Data telah di ubah');window.location.href='list.resep.php';</script>";		
	}
	
	


?>