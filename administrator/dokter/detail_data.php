<?php 
include 'koneksi.php';
?>
<?php
$id_data =$_GET['id_data'];
$det=mysqli_query($koneksi,"select * from rekam_medis where id_data='$id_data'")or die(mysqli_error($koneksi));
while($d=mysqli_fetch_array($det)){
?>          
  
      <table border="1" width="100%;" style="padding:5px">
        
      <tr>
        <td>Obat</td>
        <input type="text" name="id_data" value="<?php echo $d['id_data'] ?>" hidden>
        <td>
            <select name="obat" class="form-control" required> 
            <option value="">--Pilih Obat--</option>
             
            <?php

                  require_once 'koneksi.php';
                  $query = "SELECT * FROM obat ";
                  $result = mysqli_query($koneksi, $query);
                  ?>
               <?php 
               while ($data = mysqli_fetch_assoc($result)) {
                  ?>

                <option value="<?php echo $data['nama_obat'];?>"><?php echo $data['nama_obat'] ;?></option>  
                
               <?php } ?>
               <div style="color:red"><?php echo isset($error['nama_obat']) ? $error['nama_obat'] : '';?></div>
            </select>
        </td>
      </tr>
      <tr>
        <td>Jumlah</td>
        <td><input type="text" class="form-control" name="jumlah" value="<?php echo $d['jumlah'] ?>"></td>
      </tr>
      <tr>
        <td>Keterangan</td>
        <td><input type="text" class="form-control" name="keterangan"  value="<?php echo $d['keterangan']?>"></td>
      </tr>
      
      </table>
  <?php 
}
?>
