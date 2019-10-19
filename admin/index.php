    <?php
        session_start();
        if (empty($_SESSION['username'])) {
            header('location:index.html');
            # code...
        }


        date_default_timezone_set("Asia/Jakarta");
        extract($_POST);
        $conn = mysqli_connect('localhost','root','','tiket_ukk');
     ?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Administrator</title>

        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">

        <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

        <!--jquery-->
        <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>

        <link rel="stylesheet" href="dist/css/summernote.css">
        <script src="dist/js/summernote.js"></script>

    </head>

    <body class="hold-transition skin-green sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="#" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>A</b>LT</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Administrator</b></span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="glyphicon glyphicon-menu-hamburger"></span>
                    </a>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <?php include'menu.php'; ?>
                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper" >
                    <!-- Content Header (Page header) -->

                    <!-- Main content -->
                    <section class="content">
                       <?php 
                            if (isset($_GET['page'])) {
                                switch ($_GET['page']) {

                                    case'user':include'data/e-user.php';break;
                                    case'list_user':include'data/s-user.php';$order=2;break;

                                    case'customer':include'data/e-customer.php';break;
                                    case'list_customer':include'data/s-customer.php';$order=2;break;

                                    case'transtype':include'data/e-transtype.php';break;
                                    case'list_transtype':include'data/s-transtype.php';$order=2;break;

                                    case'transp':include'data/e-transp.php';break;
                                    case'list_transp':include'data/s-transp.php';$order=2;break;

                                    case'rute':include'data/e-rute.php';break;
                                    case'list_rute':include'data/s-rute.php';$order=2;break;

                                    case'reservation':include'data/e-reservation.php';break;
                                    case'list_reservation':include'data/s-reservation.php';$order=2;break;
                                }
                                # code...
                            }else{
                                echo "
                                    <div class='alert alert-success alert-dismissable' style='margin-top:20px'>
                                    <button type='button' class='close' data-dimiss='alert' aria-label='Close'>x</button>
                                    <h4><strong><i class='glyphicon glyphicon-user'></i> Selamat Datang !</strong></h4>Selamat datang di halaman admin tiket online ukk :)
                                    </div> 
                                ";
                            }
                        ?>
                    </section>
                </div>
                <!-- /.content-wrapper -->
                <footer class="main-footer">
                    <div class="pull-right hidden-xs">
                        <b>Version</b> 2.3.0
                    </div>
                    <strong>Copyright &copy; 2018<a href="https://smkn1selong.sch.id/"> UKK Rekayasa Perangkat Lunak</a>.</strong> All rights reserved.
                </footer>
                <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->
        <!-- Bootstrap 3.3.5 -->
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
        <script>
            $(function () {
                $("#example1").DataTable({
                    "order": [[<?php echo $order; ?>, "desc"]]
                });
            });
        </script>
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Sparkline -->
        <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
        <!-- jvectormap -->
        <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="plugins/knob/jquery.knob.js"></script>
        <!-- daterangepicker -->
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>-->
        <script src="plugins/daterangepicker/daterangepicker.js"></script>
        <!-- datepicker -->
        <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
        <!-- Slimscroll -->
        <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="plugins/fastclick/fastclick.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/app.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="dist/js/pages/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>
        <script>
            $('#tgl_agenda').datepicker({
                format: 'dd-mm-yyyy'
            })
        </script>
    </body>
    </html>