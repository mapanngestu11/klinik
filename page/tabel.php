 <div class="section-space60" id="tabel">
        <!-- section-space80 -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <h1>Tabel Antrian Pasien</h1>
                        <p>Nec scelerisque diam lobortis utex orci posuere mollis tellus id lacinia pharetra. </p>
                    </div>
                </div>
            </div>
            <div class="row">
            <style type="text/css">
                <style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
</style>
            </style>            
                <table class="table" border="1">
                    <tr align="center">
                        <th>No</th>
                          <th>Nama Pasien</th>
                          <th>Penyakit</th>
                          <th>Dokter</th>
                          <th>Waktu</th>
                          <th>Tanggal</th>
                     </tr>
                     <?php 
                      $tgl = date("d-M-Y");
                       include 'koneksi.php';
                       $no = 1;
                       $data = mysqli_query($koneksi,"SELECT * FROM `rekam_medis` Where tanggal ='$tgl' ORDER BY `waktu` ASC");
                       while($d = mysqli_fetch_array($data)){
                        ?>
                     <tr>

                          <td><?php echo $no++ ;?></td>
                          <td><?php echo $d['nama']; ?></td>
                          <td><?php echo $d['penyakit']; ?></td>
                          <td><?php echo $d['nama_dokter']; ?></td>
                          <td><?php echo $d['waktu']; ?></td>
                          <td><?php echo $d['tanggal']; ?></td>
                     </tr> 
                     <?php }

                     ?>  
                </table>
            </div>
        </div>
        <!-- /.section-space80 -->
    </div>