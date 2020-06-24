
<?php

session_start();

include 'koneksi.php';

	$id_data 	= $_POST['id_data'];
   	
    $obat  		= $_POST['obat'];
    $keterangan = $_POST['keterangan']; 	
    $jumlah     = $_POST['jumlah'];	
   $tanggal = date("d-M-Y");
	$waktu = date("h:i:s");


$sql = "UPDATE `rekam_medis` SET `obat` = '$obat', `jumlah` = '$jumlah', `keterangan` = '$keterangan' ,`status`='sudah',`tanggal`='$tanggal',`waktu`='$waktu' WHERE `rekam_medis`.`id_data` = $id_data;";
	$tambahdata = mysqli_query($koneksi,$sql);

	if (!$tambahdata) {
		
		echo "<script> alert ('Gagal mengubah Data');window.location.href='pendataan_pasien.php';</script>";		
	}
	else{
		
		echo "<script> alert ('Data telah di ubah');window.location.href='pendataan_pasien.php';</script>";		
	}
	
	


?>


