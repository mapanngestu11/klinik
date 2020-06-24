<!DOCTYPE html>
<html lang="en">

<?php include 'page/head.php'; ?>

<body class="animsition">
    <div class="intro-section">
        <!-- intro section -->
        <div class="top-header">
            <!-- top heder -->
            <div class="container">
                <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-5  hidden-xs">
                            <p>Selamat Datang di Website Kami</p>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-7 hidden-xs">
                            <div class="pull-right">
                                <span class="top-link"><i class="fa fa-phone"></i> +00 (123) 456 7890</span>
                                <span class="top-link"><i class="fa fa-envelope"></i> info@broker.com</span>
                                <span class="navigation-search top-link">
              <a href="#"><i class="fa fa-search"></i></a>
            </span>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <!-- /.top header -->
            <!-- navigation-transparent -->
            <div class="header">
                <!-- navigation -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                           
                        </div>
                        
                    </div>
                </div>
            </div>
        <!-- /.navigation -->
        <script type="text/javascript">
            $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
        </script>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 hidden-xs">
                    <div class="intro-caption">
                        <!-- intro caption -->
                        <h1 class="intro-title">Be Healthy !</h1>
                        <p class="mb40">"Kesehatan Selalu Tampak Berharga Setelah Kita Kehilangannya."</p>
                        <p class="mb40">Jonathan Swift</p>
                        <a href="#" class="btn btn-default"  data-toggle="modal" data-target="#exampleModal">Daftar</a>
                        <a href="#tabel" class="btn btn-white">Lihat Antrian</a> </div>
                    <!-- /.intro caption -->
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Daftar Pasien Baru</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="regis_pasien.php" method="post">
            <div class="row">
            <div class="col-md-6">
           <label>Nama Lengkap</label>
           <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
           </div>
           <div class="col-md-6">
               <label>Jenis Kelamin</label>
               <select name="jenkel" class="form-control">
                   <option value=""> pilih </option>
                   <option value="Laki-Laki">Laki-Laki</option>
                   <option value="Perempuan">Perempuan</option>
               </select>
           </div>
           </div>
           <div class="row">
               <div class="col-md-12">
                    <label>Alamat</label>
                   <input type="text" name="alamat" class="form-control" placeholder="Alamat">
               </div>
           </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
    </div>
    <!-- /.intro section -->
   <?php include 'page/tabel.php'; ?>

   
    
    <!-- /.section-space80 -->
   <?php include 'page/alamat.php'; ?>
   
    <?php include 'page/footer.php';?>
    <!-- /.footer -->
    <div class="tiny-footer">
        <!-- tiny-footer -->
        <div class="container">
            <div class="row">
                
            </div>
        </div>
    </div>
    <!-- /.tiny-footer -->
    <!-- back to top icon -->
    <a href=" #0 " class="cd-top" title="Go to top">Top</a>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content ">
                <div class="modal-body">
                    <iframe width="100%" height="600" src="https://www.youtube.com/embed/CoirzH4fByQ" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menumaker.js"></script>
    <script type="text/javascript">
    $("#navigation").menumaker({
        title: "Menu",
        format: "multitoggle"
    });
    </script>
    <!-- animsition -->
    <script type="text/javascript" src="js/animsition.js"></script>
    <script type="text/javascript" src="js/animsition-script.js"></script>
    <!-- sticky header -->
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/sticky-header.js"></script>
    <!-- owl carsoul -->
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/testimonial.js"></script>
    <!-- Back to top script -->
    <script src="js/back-to-top.js" type="text/javascript"></script>
</body>

</html>
