<?php
	require 'includes/connect.php';
	require 'includes/logged-in.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'templates/header.html' ?>
    <title>Millenia Admin | Atur Promo</title>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
    	<?php include 'templates/navsidebar.html' ?>
        <?php $filter = (empty($_GET['filter'])) ? '' : $_GET['filter']; ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-12">
                        <h4 class="page-title">Atur Promo</h4>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Beranda</a></li>
                            <li class="active">Atur Promo</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <h3>Daftar Produk Dengan Promo
                                <a href="add-promo.php"><button class="btn btn-success pull-right">Tambah</button></a></h3>

                            <div style="margin-bottom: -35px;"><p style="display: inline;">Jenis Promo</p>
                            <select name="forma" onchange="location = this.value;" style="display: inline; width: 150px;" name="category" class="input-sm form-control" id="category" required="yes">
                                <?php
                                if($filter != ''){
                                echo "<option>".ucfirst($filter)."</option>";
                                } ?>
                                <option value="manage-promo.php">Semua</option>
                                <option value="manage-promo.php?filter=clearance">Clearance</option>
                                <option value="manage-promo.php?filter=quantity">Quantity</option>
                                <option value="manage-promo.php?filter=time">Time</option>
                            </select></div>
                            <div class="table-responsive">
                                <table id="tbl" class="table-striped table">
                                    <thead>
                                        <tr>
                                            <th>Kode Produk</th>
                                            <th>Gambar</th>
                                            <th>Nama Produk</th>
                                            <th>Harga Asli</th>
                                            <th>Harga Promo</th>
                                            <th>Promo Aktif</th>
                                            <th>Ubah</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $list = mysqli_query($conn, "SELECT * FROM mi_view_product WHERE LENGTH(promo) > 1 and lower(promo) like '%$filter%'");

                                        while ($row = mysqli_fetch_assoc($list)) 
                                          {
                                            $no = $row['product_no'];
                                            $id = $row['product_code'];
                                            $img = $row['picture_color_url'];
                                            $name = $row['product_name'];
                                            $price = $row['product_price'];
                                            $promo_price = $row['product_promo_price'];
                                            $category = $row['subsubcategory_name'];
                                            $promo = $row['promo'];
                                            
                                            echo "
                                            <tr class='result'>
                                              <td>".$id."</td>
                                              <td><img src='../".$img."' height='100px'></img></td>
                                              <td>".$name."</td>
                                              <td>".$price."</td>
                                              <td>".$promo_price."</td>
                                              <td>".$promo."</td>
                                              <td><a href='edit-promo.php?pid=".$no."'>Ubah</a></td>
                                              <td><a data-toggle='modal' data-target='#myModal' data-id='".$no."' style='color: red;cursor: pointer;' class='hapus'>Hapus</a></td>
                                            </tr>
                                            ";
                                          }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
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
