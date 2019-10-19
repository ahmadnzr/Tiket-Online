<?php 
  
  extract($_POST);
  $conn = mysqli_connect('localhost','root','','tiket_ukk');
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tiket Online | UKK 2018</title>
  <?php include'style.php'; ?>
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-green layout-top-nav">
<div class="wrapper">

<?php include'header.php'; ?>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          R.P.L Tiket
          <small>Pesawat dan Kereta Api</small>
        </h1>
      </section>
      
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-3">
            <div class="box">
              <div class="box-header">
                <h4 class="box-title">Login Costumer</h4>
              </div>
              <div class="box-body">
                <form method="post">
                  <input type="text" name="email" class="form-control" placeholder="Your Email">&nbsp;
                  <input type="text" name="password" class="form-control" placeholder="Your Password">
                </form>
              </div>
              <div class="box-footer">
                <button type="submit" name="login" class="btn btn-primary btn-block btn-flat pull-right">Login</button>
              </div>
            </div>
            <div class="box box-warning">
              <div class="box-header with-border">
                <h4 class="box-title">Informasi</h4>
              </div>
              <div class="box-body">
                <p>Selamat di website kami</p> <p>website ini dibuat untuk memudahkan anda untuk memesan tiket tanpa harus pergi ke lokasi pembelian tiket secara langsung.</p><p>untuk pemesanan tiket cukup gampang anda tingal klik linknya <a href="index.php?page=pesan">disini</a> atau anda dapat langsung memilih menu<strong> pesan tiket</strong> di atas.</p>
              </div>
            </div>
          </div>
            <div class="col-md-9">
              <div class="box box-info">
                <div class="box-body">
                  <?php 
                    if (isset($_GET['page'])) {
                      switch ($_GET['page']) {
                        
                        case'pesan':include'customer/jenis-tiket.php';break;
                        case'step1':include'customer/pilihan.php';break;
                        case'step2':include'customer/rute.php';break;
                        case'step3':include'customer/cek.php';break;
                      }
                      # code...
                    }else{
                      include'utama.php';
                    }
                   ?>
                </div>
              </div>
            </div>
          </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
<?php include 'footer.php' ?>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<?php include'script.php'; ?>
</body>
</html>
