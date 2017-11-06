<?php
	require 'includes/connect.php';
	require 'includes/logged-in.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'templates/header.html' ?>
    <title>Millenia Admin | Millenia of thes Month</title>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
    	<?php include 'templates/navsidebar.html' ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-12">
                        <h4 class="page-title">Millenia of the Month</h4>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Beranda</a></li>
                            <li class="active">MOTM</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
</body>

<?php include 'templates/scripts.html' ?>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <form method="post" action="manage-promo.php">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Hapus Promo</h4>
      </div>
      <div class="modal-body">
        <p>Apakah Anda yakin ingin menghapus promo ini?</p>
            <input type="hidden" id="idku" name="idku">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-success" type="submit" name="hapus">Hapus</button>
      </div>
    </div>
    </form>
  </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#tbl').DataTable({"bLengthChange": false});
        $('.input-sm').height('20px');
    });
    $(document).on("click", ".hapus", function () {
        var idku = $(this).data('id');
        $(".modal-body #idku").val(idku);
    });
</script>
<?php
    if(isset($_POST['hapus'])) {
        $idku = $_POST['idku'];
        $sql = "UPDATE mi_product SET product_clearance_active='N',product_time_active='N',product_qty_active='N' WHERE product_no = '$idku'";
        if(mysqli_query($conn, $sql)){
            header("location: manage-promo.php");
        } else {
            echo "<script>alert('Gagal menghapus promo, refresh halaman dan coba lagi');</script>";
        }
    }
?>
</html>
