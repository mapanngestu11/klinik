
<?php

session_start();

include 'koneksi.php';

	$id_obat 	= $_POST['id_obat'];	
    $nama_obat  		= $_POST['nama_obat'];
    $harga 		= $_POST['harga']; 	
    $jumlah		= $_POST['jumlah'];
    $keterangan  = $_POST['keterangan'];	
  $tanggal = date("d-M-Y");

  


$sql = "UPDATE `obat` SET `nama_obat` = '$nama_obat',`jumlah`='$jumlah',`harga` = '$harga', `keterangan` = '$keterangan',`tanggal`='$tanggal' WHERE `obat`.`id_obat` = $id_obat;";
	$tambahdata = mysqli_query($koneksi,$sql);

	if (!$tambahdata) {
		
		echo "<script> alert ('Gagal mengubah Data');window.location.href='list.obat.php';</script>";		
	}
	else{
		
		echo "<script> alert ('Data telah di ubah');window.location.href='list.obat.php';</script>";		
	}
	
	


?>


