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
                                <option value="manage-promo.php?filter=motm">MOTM</option>
                            </select></div>
                            <div class="table-responsive">
                                <table id="tbl" class="table-striped table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>Harga Promo</th>
                                            <th>Kategori</th>
                                            <th>Promo Aktif</th>
                                            <th>Ubah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $list = mysqli_query($conn, "SELECT * FROM mi_view_product WHERE LENGTH(promo) > 1 and lower(promo) like '%$filter%'");

                                        while ($row = mysqli_fetch_assoc($list)) 
                                          {
                                            $no = $row['product_no'];
                                            $id = $row['product_code'];
                                            $name = $row['product_name'];
                                            $promo_price = $row['product_promo_price'];
                                            $category = $row['subsubcategory_name'];
                                            $promo = $row['promo'];
                                            
                                            echo "
                                            <tr class='result'>
                                              <td>".$id."</td>
                                              <td>".$name."</td>
                                              <td>".$promo_price."</td>
                                              <td>".$category."</td>
                                              <td>".$promo."</td>
                                              <td><a href='edit-promo.php?pid=".$no."'>Ubah</a></td>
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

<script type="text/javascript">
    $(document).ready(function() {
        $('#tbl').DataTable({"bLengthChange": false});
        $('.input-sm').height('20px');
    });
</script>
</html>
