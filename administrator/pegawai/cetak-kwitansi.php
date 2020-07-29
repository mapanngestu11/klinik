<!DOCTYPE html>
<html>
<head>
	<title>Print Data Kwitansi</title>
</head>
<body>
	<?php
						$tanggal = date ("d-M-Y");
						?>
	<table width="100%">
<tr>
<td width="30" align="center"><img src="asset/img/logo-klinik.png" width="50%"></td>
<td width="50" align="center">
<h1 style="color:green;  line-height:5px;">Klinik Insan Permata</h1>

<center style="font-size:14px">Jl. Swadaya No.27, Paku Jaya, Kec. Serpong Utara, Kota Tangerang Selatan, </center>
<center style="font-size:14px">Banten 15220 Telp. (021) 53131072</center>

</td>
<!-- <td width="50" align="center"><img src="img/logosma.jpg" width="70%">
 -->
</td>
</tr>
</table>
<hr>
	<?php 
	include "koneksi.php";
 $nama_pasien =$_GET['nama_pasien'];

  ?>

<h3 align="center"><u>Kwitansi</u></h3>
<?php 
                include 'koneksi.php';
                $no = 1;
                $nama_pasien = $_GET['nama_pasien'];
                $data = mysqli_query($koneksi,"SELECT * FROM Kwitansi Where nama_pasien ='$nama_pasien' ");
                while($d = mysqli_fetch_array($data)){
                  ?>
                  <div class="col-md-6">
                  <table>
                    <tr>
                    
                      <th>Nama Pasien</th>
                      <th>:</th>
                      <th><?php echo $d['nama_pasien']; ?></th>
                    </tr>
                    <tr>
                      <th>Nama Dokter</th>
                      <th>:</th>
                      <th><?php echo $d['nama_dokter']; ?></th>
                    </tr>

                    <tr>
                      
                      <th>Obat yang di berikan</th>
                      <th>:</th>
                      <th><?php echo $d['obat1']; ?><th> &nbsp; &nbsp; Jumlah : &nbsp; <?php echo $d['jumlah1']; ?></th></th>
                    </tr>
                     <tr>
                      <th></th>
                      <th>:</th>
                      <th><?php echo $d['obat2']; ?> <th> &nbsp; &nbsp; Jumlah : &nbsp; <?php echo $d['jumlah2']; ?></th></th>
                    </tr>
                    <tr>
                      <th></th>
                      <th>:</th>
                      <th><?php echo $d['obat3']; ?> <th> &nbsp; &nbsp; Jumlah : &nbsp; <?php echo $d['jumlah3']; ?></th></th>
                    </tr>
                    <tr>
                      <th></th>
                      <th>:</th>
                      <th><?php echo $d['obat4']; ?> <th> &nbsp; &nbsp; Jumlah : &nbsp; <?php echo $d['jumlah4']; ?></th></th>
                    </tr>
                     <tr>
                      <th>Total Harga</th>
                      <th>:</th>
                      <th>
                      <?php  
                        $total  = ($d['harga1'] * $d['jumlah1'])+($d['harga2'] * $d['jumlah2'])+($d['harga3'] * $d['jumlah3'])+($d['harga4'] * $d['jumlah4']);
                         
                         ?>
                         Rp.
                         <?php
                           echo $total;
                         ?>
                      </th>
                    </tr>
                    <tr>
                      <th>Jumlah Uang</th>
                      <th>:</th>
                      <th>Rp. <?php echo $d['jumlah_uang']; ?></th>
                    </tr>
                    <tr>
                      <th>Uang Kembali</th>
                      <th>:</th>
                       <?php  
                        $total  = ($d['harga1'] * $d['jumlah1'])+($d['harga2'] * $d['jumlah2'])+($d['harga3'] * $d['jumlah3'])+($d['harga4'] * $d['jumlah4']);
                         
                       $kemabalian = $d['jumlah_uang'] - $total ;

                         ?>
                     


                      <th>Rp. <?php echo $kemabalian ; ?></th>
                    </tr>
                    <tr>
                      <th>Tanggal</th>
                      <th>:</th>
                      <th><?php echo date('d-M-y'); ?></th>
                    </tr>
                    <tr>
                      <th>Waktu</th>
                      <th>:</th>
                      <th><?php echo date("h:i:s"); ?></th>
                    </tr>

                  </table>

                  <?php }

                  ?>
                  </div>


                      <br>
                      <br>
                      <h3 align="right">Di Cetak Oleh,</h3>
                      <br>
                      <br>
                      <h3 align="right">Bagian Administrasi,</h3>
</body>

<script >
  window.print();
</script>

</html>