<?php
require "koneksi/koneksi.php";
require "query/save.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="img/logoatas.jpg" rel="icon">
    <!-- BOOTSTRAP 5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrapku.css">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="plugin/fontawesome-free-5.15.4-web/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- DataTable CSS -->

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">




    <title>Cek Hipertensi</title>


</head>

<body>
    <?php include('support/menu.php') ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col">


                <?php
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];

                    switch ($page) {
                        case 'home':
                            include "content/home.php";
                            break;
                        case 'data-hasil':
                            include "content/data-hasil.php";
                            break;
                        case 'ketentuan':
                            include "content/ketentuan.php";
                            break;
                    }
                } else {
                    include "content/home.php";
                }

                ?>
            </div>
        </div>
    </div>
    <?php include('content/modal.php') ?>


</body>

</html>

<!-- SCRIPT -->
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.6.0.min.js"></script>



<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>


<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
<script src="funtions/modals.js"></script>