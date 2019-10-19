$(function () {
                $("#example1").DataTable({
                    "order": [[<?php echo $order; ?>, "desc"]]
                });
            });