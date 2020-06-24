<?php 
include 'koneksi.php';
?>
<?php
$id_pesan =$_GET['id_pesan'];
$det=mysqli_query($koneksi,"select * from keluhan where id_pesan='$id_pesan'")or die(mysqli_error($koneksi));
while($d=mysqli_fetch_array($det)){
?>					
	
			<table border="1" width="100%;" style="padding:5px">
				
			<tr>
				<td>Nama</td>
				<td><input type="text" class="form-control"  value="<?php echo $d['nama'] ?>"></td>
			</tr>
			<tr>
				<td>Perihal</td>
				<td><input type="text" class="form-control"value="<?php echo $d['perihal'] ?>"></td>
			</tr>
			<tr>
				<td>Isi Pesan</td>
				<td><input type="text" class="form-control"  value="<?php echo $d['isi']?>"></td>
			</tr>
			
			</table>
	<?php 
}
?>
