<?php
 include 'koneksi.php';

 $id_pasien = $_GET['id_pasien'];

 	$tambahdata = mysqli_query($koneksi, "DELETE from pasien where id_pasien ='$id_pasien'");

 		if (!$tambahdata) {
		
		echo "<script> alert ('Proses Gagal !');window.location.href='list.pasien.php';</script>";		
	}
	else{
		
		echo "<script> alert ('Data Pasien berhasil Di Hapus !');window.location.href='list.pasien.php';</script>";		
	}

 	

?>