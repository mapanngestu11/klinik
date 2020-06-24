<!DOCTYPE html>
<html>
<head>
	<title>Print Data Kehadiran</title>
</head>
<body>
	<?php
						$tanggal = date ("d-M-Y");
						?>
	<table width="100%">
<tr>
<td width="25" align="center"><img src="asset/img/k1.jpg" width="80%"></td>
<td width="50" align="center"><h1>KLINIK INSAN PERMATA</h1><hr><br><h4>Jl.Salembaran Dadap. Komplek Pergudangan Kosambi Barat No.36 AB Tangerang,15213, Banten</h4></td>
</tr>
</table>
<?php 
include'koneksi.php';
 $kode_pasien = $_GET['kode_pasien'];
                $data = mysqli_query ($koneksi, "SELECT * FROM pasien where kode_pasien ='$kode_pasien'");
                while ($d = mysqli_fetch_array($data)) {
                      ?>

<h3 align="center">Rekam Medis Pasien</h3>
<h4 align="left" style="bold">DATA DIRI*</h4>
<table border="0">
	<tr>
		<td>Nama Lengkap </td>
		<td>:</td>
		<td><?php echo$d['nama'];?></td>
	</tr>
	<tr>
		<td>NIK</td>
		<td>:</td>
		<td><?php echo$d['nik'];?></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><?php echo$d['jenkel'];?></td>
	</tr>
	<tr>
		<td>Usia</td>
		<td>:</td>
		<td><?php echo$d['usia'];?></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><?php echo$d['alamat'];?></td>
	</tr>
</table>
<?php
}
?>

<h4 align="left" style="bold">DATA REKAM MEDIS PASIEN*</h4>
 <table class="table" border="1" align="center" >
                    <tr align="center">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Keluhan Penyakit</th>
                        <th>Obat</th>
                        <th>Catatan Dokter</th>
                        <th>Dokter</th>
                        <th>Tanggal</th>
                        
                     </tr>
                     <?php 
                       $kode_pasien = $_GET['kode_pasien'];
                       include 'koneksi.php';
                       $no = 1;
                       $data = mysqli_query($koneksi,"SELECT * FROM `rekam_medis` where kode_pasien = '$kode_pasien'");
                       while($d = mysqli_fetch_array($data)){
                        ?>
                     <tr>
                         <td><?php echo $no++ ;?></td>
                          <td><?php echo $d['nama']; ?></td>
                          <td><?php echo $d['penyakit']; ?></td>
                          <td><?php echo $d['obat']; ?></td>
                          <td><?php echo $d['keterangan']; ?></td>
                          <td><?php echo $d['nama_dokter']; ?></td>
                          <td><?php echo $d['tanggal']; ?></td>
                          
                     </tr>  
                     <?php 
                     }
                     ?> 
                </table>
                <br>
<h4 align="right">Tangerang, <?php echo$tanggal ?></h4>
<br>
<br>
<h4 align="right">(_____________________)</h4>
<script>
  window.print()
</script>