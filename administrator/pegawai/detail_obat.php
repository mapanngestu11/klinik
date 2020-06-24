<?php 
include 'koneksi.php';
?>
<?php
$id_obat =$_GET['id_obat'];
$det=mysqli_query($koneksi,"select * from obat where id_obat='$id_obat'")or die(mysqli_error($koneksi));
while($d=mysqli_fetch_array($det)){
?>          
  
      <table border="1" width="100%;" style="padding:5px">
        
      <tr>
        <td>Obat</td>
        <input type="text" name="id_obat" value="<?php echo $d['id_obat'] ?>" hidden>
        <td><input type="text" class="form-control" name="nama_obat" value="<?php echo $d['nama_obat'] ?>"></td>
      </tr>
      <tr>
        <td>harga</td>
        <td>
        <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Rp.</span>
        <input type="text" name="harga" class="form-control" aria-describedby="basic-addon1" value="<?php echo $d['harga'] ?>">
        </div>
       </td>
      </tr>
      <tr>
        <td>Jumlah</td>
        <td><input type="number" name="jumlah" class="form-control" value="<?php echo $d['jumlah'] ?>"></td>
      </tr>
      <tr>
        <td>Keterangan</td>
        <td><input type="text" class="form-control" name="keterangan"  value="<?php echo $d['keterangan']?>"></td>
      </tr>
      
      </table>
  <?php 
}
?>
