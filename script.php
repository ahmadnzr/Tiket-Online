
<script src="bootstrap/js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!--data tables-->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
        <script>
            $(function () {
                $("#example1").DataTable({
                    "order": [[<?php echo $order; ?>, "desc"]]
                });
            });
        </script>
<!-- SlimScroll -->
<script src="bootstrap/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bootstrap/js/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="bootstrap/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="bootstrap/js/demo.js"></script>