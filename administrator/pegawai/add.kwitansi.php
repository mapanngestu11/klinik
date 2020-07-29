<!DOCTYPE html>
<html lang="en">
<?php include 'page/head.php'; ?>


<body id="mimin" class="dashboard">
  <!-- start: Header -->
  <?php include 'page/head-nav.php'; ?>
  <!-- end: Header -->

  <div class="container-fluid mimin-wrapper">

    <!-- start:Left Menu -->
    <?php include 'page/left-menu.php'; ?>
    <!-- end: Left Menu -->

    <!--<![endif]-->

    <?php

include 'koneksi.php';
session_start();

$id_resep = $_GET['id_resep'];

  $sql = "UPDATE `resep` SET `status` = 'Kwitansi' WHERE `resep`.`id_resep` = '$id_resep';";

  $tambahdata=mysqli_query($koneksi,$sql);


?>
    <?php 
    include "koneksi.php";
    if(!$koneksi){
      die ("Connection failed: ".mysqli_connect_error());
    }
 // TAMPILKAN DATA BARANG DAN HARGA
    $obat1=mysqli_query($koneksi, "SELECT * FROM obat");
    $jsArray = "var harga = new Array();\n"; 

    ?>

    <?php 
    include "koneksi.php";
    if(!$koneksi){
      die ("Connection failed: ".mysqli_connect_error());
    }
 // TAMPILKAN DATA BARANG DAN HARGA
    $obat2=mysqli_query($koneksi, "SELECT * FROM obat");
    $jsArray = "var harga = new Array();\n"; 

    ?>


    <?php 
    include "koneksi.php";
    if(!$koneksi){
      die ("Connection failed: ".mysqli_connect_error());
    }
 // TAMPILKAN DATA BARANG DAN HARGA
    $obat3=mysqli_query($koneksi, "SELECT * FROM obat");
    $jsArray = "var harga = new Array();\n"; 

    ?>
    


    <?php 
    include "koneksi.php";
    if(!$koneksi){
      die ("Connection failed: ".mysqli_connect_error());
    }
 // TAMPILKAN DATA BARANG DAN HARGA
    $obat4=mysqli_query($koneksi, "SELECT * FROM obat");
    $jsArray = "var harga = new Array();\n"; 

    ?>

    <div id="content">
      <div class="panel box-shadow-none content-header">
        <div class="panel-body">
          <div class="col-md-12">
            <h3 class="animated fadeInLeft">Kwitansi</h3>
            <p class="animated fadeInDown">
              Resep <span class="fa-angle-right fa"></span> Buat Kwitansi Resep
            </p>
          </div>
        </div>
      </div>

      <form action="add_kwitansi.php" method="post">
        <div class="form-element">


          <div class="col-md-12 padding-0">


            <div class="col-md-12">
              <div class="col-md-12 panel">
                <div class="col-md-12 panel-heading">
                  <h4>Form Kwitansi </h4>
                </div>
                <div class="col-md-12">
                  <h3 align="center">Sesuaikan nama obat dengan keperluan tabel
                    <hr></h3>

                  </div>
                  <div class="col-md-12 panel-body">
                    <div class="row">
                     <div class="col-md-5">
                      <label for="Nama dokter" class=" form-control-label">Nama Pasien</label>
                      <select name="nama_pasien" class="form-control" required oninvalid="this.setCustomValidity('Field Tidak Boleh Kosong')" oninput="setCustomValidity('')"> 
                        <option value="">--Nama Pasien--</option>

                        <?php


                        require_once 'koneksi.php';

                        $query = "SELECT DISTINCT nama FROM pasien";
                        $result = mysqli_query($koneksi, $query);
                        ?>
                        <?php 
                        while ($data = mysqli_fetch_assoc($result)) {
                          ?>

                          <option value="<?php echo $data['nama'];?>"><?php echo $data['nama'] ;?></option>  

                          <?php } ?>
                          <div style="color:red"><?php echo isset($error['nama']) ? $error['nama'] : '';?></div>
                        </select>


                      </div>
                      <div class="col-md-5">
                        <label for="Nama dokter" class=" form-control-label">Nama Dokter</label>
                        <select name="nama_dokter" class="form-control" required oninvalid="this.setCustomValidity('Field Tidak Boleh Kosong')" oninput="setCustomValidity('')"> 
                          <option value="">--Nama Dokter--</option>

                          <?php


                          require_once 'koneksi.php';

                          $query = "SELECT DISTINCT nama_dokter FROM dokter";
                          $result = mysqli_query($koneksi, $query);
                          ?>
                          <?php 
                          while ($data = mysqli_fetch_assoc($result)) {
                            ?>

                            <option value="<?php echo $data['nama_dokter'];?>"><?php echo $data['nama_dokter'] ;?></option>  

                            <?php } ?>
                            <div style="color:red"><?php echo isset($error['nama_dokter']) ? $error['nama_dokter'] : '';?></div>
                          </select>
                        </div>
                      </div>
                      <br>
                      <div class="row">

                        <div class="col-md-5">
                         <label for="Nama Obat" class=" form-control-label">Nama Obat </label>
                     
                      <select class="form-control" onchange="myFunction(this.id)"  id="1" required>

    <option value="">--Nama Obat--</option>
                          <?php


                          require_once 'koneksi.php';

                          $query = "SELECT *  FROM obat";
                          $result = mysqli_query($koneksi, $query);
                          ?>
                          <?php 
                          while ($data = mysqli_fetch_assoc($result)) {
                            ?>

                            <option value="<?php echo $data['harga'];?>"><?php echo $data['nama_obat'] ;?></option>  

                            <?php } ?>
                            <div style="color:red"><?php echo isset($error['nama_obat']) ? $error['nama_obat'] : '';?></div>
                          </select>
                      </div>                            

                      <div class="col-md-2">
                       <div class="form-group">
                        <label  class=" form-control-label">Harga</label>
                        <input type="text" class="form-control" name="harga1" id="harga1" readonly="readonly" placeholder="Rp.">
                       <input type="text"  name="obat1" id="obat1"  placeholder="Rp." hidden>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <h1>x</h1>
                    </div>
                    <div class="col-md-2">
                      <label class="form-control-label">Jumlah</label>
                      <input type="number" class="form-control" name="jumlah1" required>
                    </div>
                  </div>


                  <div class="row">

                    <div class="col-md-5">
                     <label for="Nama Obat" class=" form-control-label">Nama Obat </label>
                      <select class="form-control" onchange="myFunction(this.id)"  id="2" >

    <option value="">--Nama Obat--</option>
                          <?php


                          require_once 'koneksi.php';

                          $query = "SELECT *  FROM obat";
                          $result = mysqli_query($koneksi, $query);
                          ?>
                          <?php 
                          while ($data = mysqli_fetch_assoc($result)) {
                            ?>

                            <option value="<?php echo $data['harga'];?>"><?php echo $data['nama_obat'] ;?></option>  

                            <?php } ?>
                            <div style="color:red"><?php echo isset($error['nama_obat']) ? $error['nama_obat'] : '';?></div>
                          </select>
                  </div>                            

                  <div class="col-md-2">
                   <div class="form-group">
                    <label  class=" form-control-label">Harga</label>
                    <input type="text" class="form-control" name="harga2" id="harga2" readonly="readonly" placeholder="Rp.">
                     <input type="text"  name="obat2" id="obat2"  placeholder="Rp." hidden>
                  </div>
                </div>
                <div class="col-md-1">
                  <h1>x</h1>
                </div>
                <div class="col-md-2">
                  <label class="form-control-label">Jumlah</label>
                  <input type="number" class="form-control" name="jumlah2">
                </div>
              </div>
              <div class="row">

                <div class="col-md-5">
                 <label for="Nama Obat" class=" form-control-label">Nama Obat </label>
                         <select class="form-control" onchange="myFunction(this.id)"  id="3">

    <option value="">--Nama Obat--</option>
                          <?php


                          require_once 'koneksi.php';

                          $query = "SELECT *  FROM obat";
                          $result = mysqli_query($koneksi, $query);
                          ?>
                          <?php 
                          while ($data = mysqli_fetch_assoc($result)) {
                            ?>

                            <option value="<?php echo $data['harga'];?>"><?php echo $data['nama_obat'] ;?></option>  

                            <?php } ?>
                            <div style="color:red"><?php echo isset($error['nama_obat']) ? $error['nama_obat'] : '';?></div>
                          </select>
              </div>                            

              <div class="col-md-2">
               <div class="form-group">
                <label  class=" form-control-label">Harga</label>
                <input type="text" class="form-control" name="harga3" id="harga3" readonly="readonly" placeholder="Rp.">
                  <input type="text"  name="obat3" id="obat3"  placeholder="Rp." hidden>
              </div>
            </div>
            <div class="col-md-1">
              <h1>x</h1>
            </div>
            <div class="col-md-2">
              <label class="form-control-label">Jumlah</label>
              <input type="number" class="form-control" name="jumlah3">
            </div>
          </div>
          <div class="row">

            <div class="col-md-5">
             <label for="Nama Obat" class=" form-control-label">Nama Obat </label>
             <select class="form-control" onchange="myFunction(this.id)"  id="4">

    <option value="">--Nama Obat--</option>
                          <?php


                          require_once 'koneksi.php';

                          $query = "SELECT *  FROM obat";
                          $result = mysqli_query($koneksi, $query);
                          ?>
                          <?php 
                          while ($data = mysqli_fetch_assoc($result)) {
                            ?>

                            <option value="<?php echo $data['harga'];?>"><?php echo $data['nama_obat'] ;?></option>  

                            <?php } ?>
                            <div style="color:red"><?php echo isset($error['nama_obat']) ? $error['nama_obat'] : '';?></div>
                          </select>
          </div>                            

          <div class="col-md-2">
           <div class="form-group">
            <label  class=" form-control-label">Harga</label>
            <input type="text" class="form-control" name="harga4" id="harga4" readonly="readonly" placeholder="Rp.">
            <input type="text"  name="obat4" id="obat4"  placeholder="Rp." hidden>
          </div>
        </div>
        <div class="col-md-1">
          <h1>x</h1>
        </div>
        <div class="col-md-2">
          <label class="form-control-label">Jumlah</label>
          <input type="number" class="form-control" name="jumlah4">
        </div>
      </div>
      <div class="row">                
        <div class="col-md-5">
         <label>Jumlah Uang</label>
         <div class="input-group">

          <span class="input-group-addon" id="basic-addon1">Rp.</span>
          <input type="number" name="jumlah_uang" class="form-control" aria-describedby="basic-addon1" >
        </div>


      </div>
    </div>






    <br>

    <button type="submit" class="btn btn-warning">Kirim</button>
  </form>


  <a class="btn btn-primary" href="list.pasien.php">Kembali </a>
</div>
<hr>


</div>
</div>
</div>
</div>


</div>
<!-- end: content -->


<!-- start: right menu -->
<div id="right-menu">
  <ul class="nav nav-tabs">
    <li class="active">
     <a data-toggle="tab" href="#right-menu-user">
      <span class="fa fa-comment-o fa-2x"></span>
    </a>
  </li>
  <li>
   <a data-toggle="tab" href="#right-menu-notif">
    <span class="fa fa-bell-o fa-2x"></span>
  </a>
</li>
<li>
  <a data-toggle="tab" href="#right-menu-config">
   <span class="fa fa-cog fa-2x"></span>
 </a>
</li>
</ul>

<div class="tab-content">
  <div id="right-menu-user" class="tab-pane fade in active">
    <div class="search col-md-12">
      <input type="text" placeholder="search.."/>
    </div>
    <div class="user col-md-12">
     <ul class="nav nav-list">
      <li class="online">
        <img src="asset/img/avatar.jpg" alt="user name">
        <div class="name">
          <h5><b>Bill Gates</b></h5>
          <p>Hi there.?</p>
        </div>
        <div class="gadget">
          <span class="fa  fa-mobile-phone fa-2x"></span> 
        </div>
        <div class="dot"></div>
      </li>
      <li class="away">
        <img src="asset/img/avatar.jpg" alt="user name">
        <div class="name">
          <h5><b>Bill Gates</b></h5>
          <p>Hi there.?</p>
        </div>
        <div class="gadget">
          <span class="fa  fa-desktop"></span> 
        </div>
        <div class="dot"></div>
      </li>
      <li class="offline">
        <img src="asset/img/avatar.jpg" alt="user name">
        <div class="name">
          <h5><b>Bill Gates</b></h5>
          <p>Hi there.?</p>
        </div>
        <div class="dot"></div>
      </li>
      <li class="offline">
        <img src="asset/img/avatar.jpg" alt="user name">
        <div class="name">
          <h5><b>Bill Gates</b></h5>
          <p>Hi there.?</p>
        </div>
        <div class="dot"></div>
      </li>
      <li class="online">
        <img src="asset/img/avatar.jpg" alt="user name">
        <div class="name">
          <h5><b>Bill Gates</b></h5>
          <p>Hi there.?</p>
        </div>
        <div class="gadget">
          <span class="fa  fa-mobile-phone fa-2x"></span> 
        </div>
        <div class="dot"></div>
      </li>
      <li class="offline">
        <img src="asset/img/avatar.jpg" alt="user name">
        <div class="name">
          <h5><b>Bill Gates</b></h5>
          <p>Hi there.?</p>
        </div>
        <div class="dot"></div>
      </li>
      <li class="online">
        <img src="asset/img/avatar.jpg" alt="user name">
        <div class="name">
          <h5><b>Bill Gates</b></h5>
          <p>Hi there.?</p>
        </div>
        <div class="gadget">
          <span class="fa  fa-mobile-phone fa-2x"></span> 
        </div>
        <div class="dot"></div>
      </li>
      <li class="offline">
        <img src="asset/img/avatar.jpg" alt="user name">
        <div class="name">
          <h5><b>Bill Gates</b></h5>
          <p>Hi there.?</p>
        </div>
        <div class="dot"></div>
      </li>
      <li class="offline">
        <img src="asset/img/avatar.jpg" alt="user name">
        <div class="name">
          <h5><b>Bill Gates</b></h5>
          <p>Hi there.?</p>
        </div>
        <div class="dot"></div>
      </li>
      <li class="online">
        <img src="asset/img/avatar.jpg" alt="user name">
        <div class="name">
          <h5><b>Bill Gates</b></h5>
          <p>Hi there.?</p>
        </div>
        <div class="gadget">
          <span class="fa  fa-mobile-phone fa-2x"></span> 
        </div>
        <div class="dot"></div>
      </li>
      <li class="online">
        <img src="asset/img/avatar.jpg" alt="user name">
        <div class="name">
          <h5><b>Bill Gates</b></h5>
          <p>Hi there.?</p>
        </div>
        <div class="gadget">
          <span class="fa  fa-mobile-phone fa-2x"></span> 
        </div>
        <div class="dot"></div>
      </li>

    </ul>
  </div>
  <!-- Chatbox -->
  <div class="col-md-12 chatbox">
    <div class="col-md-12">
      <a href="#" class="close-chat">X</a><h4>Akihiko Avaron</h4>
    </div>
    <div class="chat-area">
      <div class="chat-area-content">
        <div class="msg_container_base">
          <div class="row msg_container send">
            <div class="col-md-9 col-xs-9 bubble">
              <div class="messages msg_sent">
                <p>that mongodb thing looks good, huh?
                  tiny master db, and huge document store</p>
                  <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                </div>
              </div>
              <div class="col-md-3 col-xs-3 avatar">
                <img src="asset/img/avatar.jpg" class=" img-responsive " alt="user name">
              </div>
            </div>

            <div class="row msg_container receive">
              <div class="col-md-3 col-xs-3 avatar">
                <img src="asset/img/avatar.jpg" class=" img-responsive " alt="user name">
              </div>
              <div class="col-md-9 col-xs-9 bubble">
                <div class="messages msg_receive">
                  <p>that mongodb thing looks good, huh?
                    tiny master db, and huge document store</p>
                    <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                  </div>
                </div>
              </div>

              <div class="row msg_container send">
                <div class="col-md-9 col-xs-9 bubble">
                  <div class="messages msg_sent">
                    <p>that mongodb thing looks good, huh?
                      tiny master db, and huge document store</p>
                      <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                    </div>
                  </div>
                  <div class="col-md-3 col-xs-3 avatar">
                    <img src="asset/img/avatar.jpg" class=" img-responsive " alt="user name">
                  </div>
                </div>

                <div class="row msg_container receive">
                  <div class="col-md-3 col-xs-3 avatar">
                    <img src="asset/img/avatar.jpg" class=" img-responsive " alt="user name">
                  </div>
                  <div class="col-md-9 col-xs-9 bubble">
                    <div class="messages msg_receive">
                      <p>that mongodb thing looks good, huh?
                        tiny master db, and huge document store</p>
                        <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                      </div>
                    </div>
                  </div>

                  <div class="row msg_container send">
                    <div class="col-md-9 col-xs-9 bubble">
                      <div class="messages msg_sent">
                        <p>that mongodb thing looks good, huh?
                          tiny master db, and huge document store</p>
                          <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                        </div>
                      </div>
                      <div class="col-md-3 col-xs-3 avatar">
                        <img src="asset/img/avatar.jpg" class=" img-responsive " alt="user name">
                      </div>
                    </div>

                    <div class="row msg_container receive">
                      <div class="col-md-3 col-xs-3 avatar">
                        <img src="asset/img/avatar.jpg" class=" img-responsive " alt="user name">
                      </div>
                      <div class="col-md-9 col-xs-9 bubble">
                        <div class="messages msg_receive">
                          <p>that mongodb thing looks good, huh?
                            tiny master db, and huge document store</p>
                            <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="chat-input">
                  <textarea placeholder="type your message here.."></textarea>
                </div>
                <div class="user-list">
                  <ul>
                    <li class="online">
                      <a href=""  data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                        <div class="user-avatar"><img src="asset/img/avatar.jpg" alt="user name"></div>
                        <div class="dot"></div>
                      </a>
                    </li>
                    <li class="offline">
                      <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                        <img src="asset/img/avatar.jpg" alt="user name">
                        <div class="dot"></div>
                      </a>
                    </li>
                    <li class="away">
                      <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                        <img src="asset/img/avatar.jpg" alt="user name">
                        <div class="dot"></div>
                      </a>
                    </li>
                    <li class="online">
                      <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                        <img src="asset/img/avatar.jpg" alt="user name">
                        <div class="dot"></div>
                      </a>
                    </li>
                    <li class="offline">
                      <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                        <img src="asset/img/avatar.jpg" alt="user name">
                        <div class="dot"></div>
                      </a>
                    </li>
                    <li class="away">
                      <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                        <img src="asset/img/avatar.jpg" alt="user name">
                        <div class="dot"></div>
                      </a>
                    </li>
                    <li class="offline">
                      <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                        <img src="asset/img/avatar.jpg" alt="user name">
                        <div class="dot"></div>
                      </a>
                    </li>
                    <li class="offline">
                      <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                        <img src="asset/img/avatar.jpg" alt="user name">
                        <div class="dot"></div>
                      </a>
                    </li>
                    <li class="away">
                      <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                        <img src="asset/img/avatar.jpg" alt="user name">
                        <div class="dot"></div>
                      </a>
                    </li>
                    <li class="online">
                      <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                        <img src="asset/img/avatar.jpg" alt="user name">
                        <div class="dot"></div>
                      </a>
                    </li>
                    <li class="away">
                      <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                        <img src="asset/img/avatar.jpg" alt="user name">
                        <div class="dot"></div>
                      </a>
                    </li>
                    <li class="away">
                      <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                        <img src="asset/img/avatar.jpg" alt="user name">
                        <div class="dot"></div>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div id="right-menu-notif" class="tab-pane fade">

              <ul class="mini-timeline">
                <li class="mini-timeline-highlight">
                 <div class="mini-timeline-panel">
                  <h5 class="time">07:00</h5>
                  <p>Coding!!</p>
                </div>
              </li>

              <li class="mini-timeline-highlight">
               <div class="mini-timeline-panel">
                <h5 class="time">09:00</h5>
                <p>Playing The Games</p>
              </div>
            </li>
            <li class="mini-timeline-highlight">
             <div class="mini-timeline-panel">
              <h5 class="time">12:00</h5>
              <p>Meeting with <a href="#">Clients</a></p>
            </div>
          </li>
          <li class="mini-timeline-highlight mini-timeline-warning">
           <div class="mini-timeline-panel">
            <h5 class="time">15:00</h5>
            <p>Breakdown the Personal PC</p>
          </div>
        </li>
        <li class="mini-timeline-highlight mini-timeline-info">
         <div class="mini-timeline-panel">
          <h5 class="time">15:00</h5>
          <p>Checking Server!</p>
        </div>
      </li>
      <li class="mini-timeline-highlight mini-timeline-success">
        <div class="mini-timeline-panel">
          <h5 class="time">16:01</h5>
          <p>Hacking The public wifi</p>
        </div>
      </li>
      <li class="mini-timeline-highlight mini-timeline-danger">
        <div class="mini-timeline-panel">
          <h5 class="time">21:00</h5>
          <p>Sleep!</p>
        </div>
      </li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>

  </div>
  <div id="right-menu-config" class="tab-pane fade">
    <div class="col-md-12">
      <div class="col-md-6 padding-0">
        <h5>Notification</h5>
      </div>
      <div class="col-md-6">
        <div class="mini-onoffswitch onoffswitch-info">
          <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch1" checked>
          <label class="onoffswitch-label" for="myonoffswitch1"></label>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="col-md-6 padding-0">
        <h5>Custom Designer</h5>
      </div>
      <div class="col-md-6">
        <div class="mini-onoffswitch onoffswitch-danger">
          <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch2" checked>
          <label class="onoffswitch-label" for="myonoffswitch2"></label>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="col-md-6 padding-0">
        <h5>Autologin</h5>
      </div>
      <div class="col-md-6">
        <div class="mini-onoffswitch onoffswitch-success">
          <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch3" checked>
          <label class="onoffswitch-label" for="myonoffswitch3"></label>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="col-md-6 padding-0">
        <h5>Auto Hacking</h5>
      </div>
      <div class="col-md-6">
        <div class="mini-onoffswitch onoffswitch-warning">
          <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch4" checked>
          <label class="onoffswitch-label" for="myonoffswitch4"></label>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="col-md-6 padding-0">
        <h5>Auto locking</h5>
      </div>
      <div class="col-md-6">
        <div class="mini-onoffswitch">
          <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch5" checked>
          <label class="onoffswitch-label" for="myonoffswitch5"></label>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="col-md-6 padding-0">
        <h5>FireWall</h5>
      </div>
      <div class="col-md-6">
        <div class="mini-onoffswitch">
          <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch6" checked>
          <label class="onoffswitch-label" for="myonoffswitch6"></label>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="col-md-6 padding-0">
        <h5>CSRF Max</h5>
      </div>
      <div class="col-md-6">
        <div class="mini-onoffswitch onoffswitch-warning">
          <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch7" checked>
          <label class="onoffswitch-label" for="myonoffswitch7"></label>
        </div>
      </div>
    </div>


    <div class="col-md-12">
      <div class="col-md-6 padding-0">
        <h5>Man In The Middle</h5>
      </div>
      <div class="col-md-6">
        <div class="mini-onoffswitch onoffswitch-danger">
          <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch8" checked>
          <label class="onoffswitch-label" for="myonoffswitch8"></label>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="col-md-6 padding-0">
        <h5>Auto Repair</h5>
      </div>
      <div class="col-md-6">
        <div class="mini-onoffswitch onoffswitch-success">
          <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch9" checked>
          <label class="onoffswitch-label" for="myonoffswitch9"></label>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <input type="button" value="More.." class="btnmore">
    </div>

  </div>
</div>
</div>  
<!-- end: right menu -->

</div>

<!-- start: Mobile -->
<div id="mimin-mobile" class="reverse">
  <div class="mimin-mobile-menu-list">
    <div class="col-md-12 sub-mimin-mobile-menu-list animated fadeInLeft">
      <ul class="nav nav-list">
        <li class="active ripple">
          <a class="tree-toggle nav-header">
            <span class="fa-home fa"></span>Dashboard 
            <span class="fa-angle-right fa right-arrow text-right"></span>
          </a>
          <ul class="nav nav-list tree">
            <li><a href="dashboard-v1.html">Dashboard v.1</a></li>
            <li><a href="dashboard-v2.html">Dashboard v.2</a></li>
          </ul>
        </li>
        <li class="ripple">
          <a class="tree-toggle nav-header">
            <span class="fa-diamond fa"></span>Layout
            <span class="fa-angle-right fa right-arrow text-right"></span>
          </a>
          <ul class="nav nav-list tree">
            <li><a href="topnav.html">Top Navigation</a></li>
            <li><a href="boxed.html">Boxed</a></li>
          </ul>
        </li>
        <li class="ripple">
          <a class="tree-toggle nav-header">
            <span class="fa-area-chart fa"></span>Charts
            <span class="fa-angle-right fa right-arrow text-right"></span>
          </a>
          <ul class="nav nav-list tree">
            <li><a href="chartjs.html">ChartJs</a></li>
            <li><a href="morris.html">Morris</a></li>
            <li><a href="flot.html">Flot</a></li>
            <li><a href="sparkline.html">SparkLine</a></li>
          </ul>
        </li>
        <li class="ripple">
          <a class="tree-toggle nav-header">
            <span class="fa fa-pencil-square"></span>Ui Elements
            <span class="fa-angle-right fa right-arrow text-right"></span>
          </a>
          <ul class="nav nav-list tree">
            <li><a href="color.html">Color</a></li>
            <li><a href="weather.html">Weather</a></li>
            <li><a href="typography.html">Typography</a></li>
            <li><a href="icons.html">Icons</a></li>
            <li><a href="buttons.html">Buttons</a></li>
            <li><a href="media.html">Media</a></li>
            <li><a href="panels.html">Panels & Tabs</a></li>
            <li><a href="notifications.html">Notifications & Tooltip</a></li>
            <li><a href="badges.html">Badges & Label</a></li>
            <li><a href="progress.html">Progress</a></li>
            <li><a href="sliders.html">Sliders</a></li>
            <li><a href="timeline.html">Timeline</a></li>
            <li><a href="modal.html">Modals</a></li>
          </ul>
        </li>
        <li class="ripple">
          <a class="tree-toggle nav-header">
           <span class="fa fa-check-square-o"></span>Forms
           <span class="fa-angle-right fa right-arrow text-right"></span>
         </a>
         <ul class="nav nav-list tree">
          <li><a href="formelement.html">Form Element</a></li>
          <li><a href="#">Wizard</a></li>
          <li><a href="#">File Upload</a></li>
          <li><a href="#">Text Editor</a></li>
        </ul>
      </li>
      <li class="ripple">
        <a class="tree-toggle nav-header">
          <span class="fa fa-table"></span>Tables
          <span class="fa-angle-right fa right-arrow text-right"></span>
        </a>
        <ul class="nav nav-list tree">
          <li><a href="datatables.html">Data Tables</a></li>
          <li><a href="handsontable.html">handsontable</a></li>
          <li><a href="tablestatic.html">Static</a></li>
        </ul>
      </li>
      <li class="ripple">
        <a href="calendar.html">
         <span class="fa fa-calendar-o"></span>Calendar
       </a>
     </li>
     <li class="ripple">
      <a class="tree-toggle nav-header">
        <span class="fa fa-envelope-o"></span>Mail
        <span class="fa-angle-right fa right-arrow text-right"></span>
      </a>
      <ul class="nav nav-list tree">
        <li><a href="mail-box.html">Inbox</a></li>
        <li><a href="compose-mail.html">Compose Mail</a></li>
        <li><a href="view-mail.html">View Mail</a></li>
      </ul>
    </li>
    <li class="ripple">
      <a class="tree-toggle nav-header">
        <span class="fa fa-file-code-o"></span>Pages
        <span class="fa-angle-right fa right-arrow text-right"></span>
      </a>
      <ul class="nav nav-list tree">
        <li><a href="forgotpass.html">Forgot Password</a></li>
        <li><a href="login.html">SignIn</a></li>
        <li><a href="reg.html">SignUp</a></li>
        <li><a href="article-v1.html">Article v1</a></li>
        <li><a href="search-v1.html">Search Result v1</a></li>
        <li><a href="productgrid.html">Product Grid</a></li>
        <li><a href="profile-v1.html">Profile v1</a></li>
        <li><a href="invoice-v1.html">Invoice v1</a></li>
      </ul>
    </li>
    <li class="ripple"><a class="tree-toggle nav-header"><span class="fa "></span> MultiLevel  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
      <ul class="nav nav-list tree">
        <li><a href="view-mail.html">Level 1</a></li>
        <li><a href="view-mail.html">Level 1</a></li>
        <li class="ripple">
          <a class="sub-tree-toggle nav-header">
            <span class="fa fa-envelope-o"></span> Level 1
            <span class="fa-angle-right fa right-arrow text-right"></span>
          </a>
          <ul class="nav nav-list sub-tree">
            <li><a href="mail-box.html">Level 2</a></li>
            <li><a href="compose-mail.html">Level 2</a></li>
            <li><a href="view-mail.html">Level 2</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="credits.html">Credits</a></li>
  </ul>
</div>
</div>       
</div>
<button id="mimin-mobile-menu-opener" class="animated rubberBand btn btn-circle btn-danger">
  <span class="fa fa-bars"></span>
</button>
<!-- end: Mobile -->

<!-- start: Javascript -->
<script src="asset/js/jquery.min.js"></script>
<script src="asset/js/jquery.ui.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>


<!-- plugins -->
<script src="asset/js/plugins/moment.min.js"></script>
<script src="asset/js/plugins/jquery.knob.js"></script>
<script src="asset/js/plugins/ion.rangeSlider.min.js"></script>
<script src="asset/js/plugins/bootstrap-material-datetimepicker.js"></script>
<script src="asset/js/plugins/jquery.nicescroll.js"></script>
<script src="asset/js/plugins/jquery.mask.min.js"></script>
<script src="asset/js/plugins/select2.full.min.js"></script>
<script src="asset/js/plugins/nouislider.min.js"></script>
<script src="asset/js/plugins/jquery.validate.min.js"></script>


<!-- custom -->

<script type="text/javascript">
 function myFunction(id) {
  console.log(id)
  var x = document.getElementById(id).value;
  document.getElementById("harga" + id).value = x;

   //var z = document.getElementById(id).value('nama_obat');
   var z =$('#'+id+' option:selected').text()
  document.getElementById("obat" + id).value = z;

}



</script>

<script type="text/javascript">
  
</script>
</script>

<script src="asset/js/main.js"></script>
<script type="text/javascript">
  $(function() {
    $('#colorselector').change(function(){
      $('.colors').hide();
      $('#' + $(this).val()).show();


    });
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){

    $("#signupForm").validate({
      errorElement: "em",
      errorPlacement: function(error, element) {
        $(element.parent("div").addClass("form-animate-error"));
        error.appendTo(element.parent("div"));
      },
      success: function(label) {
        $(label.parent("div").removeClass("form-animate-error"));
      },
      rules: {
        validate_firstname: "required",
        validate_lastname: "required",
        validate_username: {
          required: true,
          minlength: 2
        },
        validate_password: {
          required: true,
          minlength: 5
        },
        validate_confirm_password: {
          required: true,
          minlength: 5,
          equalTo: "#validate_password"
        },
        validate_email: {
          required: true,
          email: true
        },
        validate_agree: "required"
      },
      messages: {
        validate_firstname: "Please enter your firstname",
        validate_lastname: "Please enter your lastname",
        validate_username: {
          required: "Please enter a username",
          minlength: "Your username must consist of at least 2 characters"
        },
        validate_password: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long"
        },
        validate_confirm_password: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long",
          equalTo: "Please enter the same password as above"
        },
        validate_email: "Please enter a valid email address",
        validate_agree: "Please accept our policy"
      }
    });

    // propose username by combining first- and lastname
    $("#username").focus(function() {
      var firstname = $("#firstname").val();
      var lastname = $("#lastname").val();
      if (firstname && lastname && !this.value) {
        this.value = firstname + "." + lastname;
      }
    });


    $('.mask-date').mask('00/00/0000');
    $('.mask-time').mask('00:00:00');
    $('.mask-date_time').mask('00/00/0000 00:00:00');
    $('.mask-cep').mask('00000-000');
    $('.mask-phone').mask('0000-0000');
    $('.mask-phone_with_ddd').mask('(00) 0000-0000');
    $('.mask-phone_us').mask('(000) 000-0000');
    $('.mask-mixed').mask('AAA 000-S0S');
    $('.mask-cpf').mask('000.000.000-00', {reverse: true});
    $('.mask-money').mask('000.000.000.000.000,00', {reverse: true});
    $('.mask-money2').mask("#.##0,00", {reverse: true});
    $('.mask-ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
      translation: {
        'Z': {
          pattern: /[0-9]/, optional: true
        }
      }
    });
    $('.mask-ip_address').mask('099.099.099.099');
    $('.mask-percent').mask('##0,00%', {reverse: true});
    $('.mask-clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
    $('.mask-placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
    $('.mask-fallback').mask("00r00r0000", {
      translation: {
        'r': {
          pattern: /[\/]/, 
          fallback: '/'
        }, 
        placeholder: "__/__/____"
      }
    });
    $('.mask-selectonfocus').mask("00/00/0000", {selectOnFocus: true});

    var options =  {onKeyPress: function(cep, e, field, options){
      var masks = ['00000-000', '0-00-00-00'];
      mask = (cep.length>7) ? masks[1] : masks[0];
      $('.mask-crazy_cep').mask(mask, options);
    }};

    $('.mask-crazy_cep').mask('00000-000', options);


    var options2 =  { 
      onComplete: function(cep) {
        alert('CEP Completed!:' + cep);
      },
      onKeyPress: function(cep, event, currentField, options){
        console.log('An key was pressed!:', cep, ' event: ', event, 
          'currentField: ', currentField, ' options: ', options);
      },
      onChange: function(cep){
        console.log('cep changed! ', cep);
      },
      onInvalid: function(val, e, f, invalid, options){
        var error = invalid[0];
        console.log ("Digit: ", error.v, " is invalid for the position: ", error.p, ". We expect something like: ", error.e);
      }
    };

    $('.mask-cep_with_callback').mask('00000-000', options2);

    var SPMaskBehavior = function (val) {
      return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
    spOptions = {
      onKeyPress: function(val, e, field, options) {
        field.mask(SPMaskBehavior.apply({}, arguments), options);
      }
    };

    $('.mask-sp_celphones').mask(SPMaskBehavior, spOptions);



    var slider = document.getElementById('noui-slider');
    noUiSlider.create(slider, {
      start: [20, 80],
      connect: true,
      range: {
        'min': 0,
        'max': 100
      }
    });

    var slider = document.getElementById('noui-range');
    noUiSlider.create(slider, {
                        start: [ 20, 80 ], // Handle start position
                        step: 10, // Slider moves in increments of '10'
                        margin: 20, // Handles must be more than '20' apart
                        connect: true, // Display a colored bar between the handles
                        direction: 'rtl', // Put '0' at the bottom of the slider
                        orientation: 'vertical', // Orient the slider vertically
                        behaviour: 'tap-drag', // Move handle on tap, bar is draggable
                        range: { // Slider can select '0' to '100'
                        'min': 0,
                        'max': 100
                      },
                        pips: { // Show a scale with the slider
                          mode: 'steps',
                          density: 2
                        }
                      });



    $(".select2-A").select2({
      placeholder: "Select a state",
      allowClear: true
    });

    $(".select2-B").select2({
      tags: true
    });

    $("#range1").ionRangeSlider({
      type: "double",
      grid: true,
      min: -1000,
      max: 1000,
      from: -500,
      to: 500
    });

    $('.dateAnimate').bootstrapMaterialDatePicker({ weekStart : 0, time: false,animation:true});
    $('.date').bootstrapMaterialDatePicker({ weekStart : 0, time: false});
    $('.time').bootstrapMaterialDatePicker({ date: false,format:'HH:mm',animation:true});
    $('.datetime').bootstrapMaterialDatePicker({ format : 'dddd DD MMMM YYYY - HH:mm',animation:true});
    $('.date-fr').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', lang : 'fr', weekStart : 1, cancelText : 'ANNULER'});
    $('.min-date').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', minDate : new Date() });


    $(".dial").knob({
      height:80
    });

    $('.dial1').trigger(
     'configure',
     {
       "min":10,
       "width":80,
       "max":80,
       "fgColor":"#FF6656",
       "skin":"tron"
     }
     );

    $('.dial2').trigger(
     'configure',
     {

       "width":80,
       "fgColor":"#FF6656",
       "skin":"tron",
       "cursor":true
     }
     );

    $('.dial3').trigger(
     'configure',
     {

       "width":80,
       "fgColor":"#27C24C",
     }
     );
  });
</script>



<!-- end: Javascript -->
</body>
</html>
