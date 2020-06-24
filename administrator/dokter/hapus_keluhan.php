<?php
 include 'koneksi.php';

 $id_pesan = $_GET['id_pesan'];

 	$tambahdata = mysqli_query($koneksi, "DELETE from keluhan where id_pesan ='$id_pesan'");

 		if (!$tambahdata) {
		
		echo "<script> alert ('Proses Gagal !');window.location.href='list.keluhan.php';</script>";		
	}
	else{
		
		echo "<script> alert ('Data berhasil Di Hapus !');window.location.href='list.keluhan.php';</script>";		
	}

 	

?>