<?php
 include 'koneksi.php';

 $id_dokter = $_GET['id_dokter'];

 	$tambahdata = mysqli_query($koneksi, "DELETE from dokter where id_dokter ='$id_dokter'");

 		if (!$tambahdata) {
		
		echo "<script> alert ('Proses Gagal !');window.location.href='list.dokter.php';</script>";		
	}
	else{
		
		echo "<script> alert ('Data Dokter berhasil Di Hapus !');window.location.href='list.dokter.php';</script>";		
	}

 	

?>