<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Administrator Klinik Insan Permata</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/datatables.bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
  <link href="asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="asset/img/logomi.png">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>

    <body id="mimin" class="dashboard">
      <!-- start: Header -->
      <?php include 'page/head-nav.php';?>
      <!-- end: Header -->

      <div class="container-fluid mimin-wrapper">

        <!-- start:Left Menu -->
        <?php include 'page/left-menu.php'; ?>
        <!-- end: Left Menu -->


        <!-- start: Content -->
        <div id="content">
         <div class="panel box-shadow-none content-header">
          <div class="panel-body">
            <div class="col-md-12">
              <h3 class="animated fadeInLeft">Data Akun</h3>
              <p class="animated fadeInDown">
                Akun <span class="fa-angle-right fa"></span> Lihat Semua
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-12 top-20 padding-0">
          <div class="col-md-12">
            <div class="panel">
              <div class="panel-heading"><h3>Data Tables</h3></div>
              <div class="panel-body">
               

              
                <!-- akhir -->
                <div class="responsive-table">
                  <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Username</th>
                        <th>Hak akses</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php 
                     include 'koneksi.php';
                     $no = 1;
                     $data = mysqli_query($koneksi,"Select * FROM user");
                     while($d = mysqli_fetch_array($data)){
                      ?>
                      <tr>
                      
                        <td><?php echo $no++ ;?></td>
                        <td><?php echo $d['nama']; ?></td>
                        <td><?php echo $d['username']; ?></td>
                         <td><?php echo $d['hak_akses']; ?></td>
                        
                         <td align="center"><a href="detail_akun.php?id_user=<?php echo $d['id_user']; ?>" class="btn btn-round btn-info"><i class="fa fa-pencil"></i> Edit</a></td>
                        <td align="center"><a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ?')){ location.href='hapus_data_dokter.php?id_dokter=<?php echo $d['id_dokter']; ?>' }" class="btn btn-round btn-danger"><i class="fa fa-trash"></i> Hapus</a></td>
                      <?php 
                  }
                  ?>
                      </tr> 

                    </tbody>
                   
                </table>
                   
              </div>
            </div>
          </div>
        </div>  
      </div>
    </div>
    <!-- end: content -->
    <!-- Modal start -->
   <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    <!-- Modal End -->

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
<script src="asset/js/plugins/jquery.datatables.min.js"></script>
<script src="asset/js/plugins/datatables.bootstrap.min.js"></script>
<script src="asset/js/plugins/jquery.nicescroll.js"></script>


<!-- custom -->
<script src="asset/js/main.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#datatables-example').DataTable();
  });
</script>
<!-- end: Javascript -->
</body>
</html>