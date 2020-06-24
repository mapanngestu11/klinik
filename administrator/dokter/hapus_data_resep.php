<?php
 include 'koneksi.php';

 $id_resep = $_GET['id_resep'];

 	$tambahdata = mysqli_query($koneksi, "DELETE from resep where id_resep ='$id_resep'");

 		if (!$tambahdata) {
		
		echo "<script> alert ('Proses Gagal !');window.location.href='list.resep.php';</script>";		
	}
	else{
		
		echo "<script> alert ('Data Resep berhasil Di Hapus !');window.location.href='list.resep.php';</script>";		
	}

 	

?>