<?php 
include 'koneksi.php';
?>
<?php
$id_resep =$_GET['id_resep'];
$det=mysqli_query($koneksi,"select * from resep where id_resep='$id_resep'")or die(mysqli_error($koneksi));
while($d=mysqli_fetch_array($det)){
?>					
	
			<table border="1" width="100%;" style="padding:5px">
				
			<tr>
				<td>Nama Dokter</td>
				<td><input type="text" class="form-control" name="nama_dokter"  value="<?php echo $d['nama_dokter'] ?>"></td>
				<input type="text" name="id_resep" value="<?php echo $d['id_resep'] ;?>" hidden>
			</tr>
			<tr>
				<td>Nama Pasien</td>
				<td><input type="text" class="form-control" name="nama_pasien" value="<?php echo $d['nama_pasien'] ?>"></td>
			</tr>
			<tr>
				<td>Resep yang di berikan</td>
				<td><input type="text" class="form-control" name="resep" value="<?php echo $d['resep']?>"></td>
			</tr>
			<tr>
				<td>Tanggal</td>
				<td><input type="text" class="form-control" name="tanggal" value="<?php echo $d['tanggal']?>" disabled></td>
			</tr>
			
			</table>
	<?php 
}
?>
