<?php
	require 'includes/connect.php';
	require 'includes/logged-in.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'templates/header.html' ?>
    <title>Millenia Admin | Atur Produk</title>
    <!-- Data Table -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
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
                        <h4 class="page-title">Atur Produk</h4>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Beranda</a></li>
                            <li class="active">Atur Produk</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <h3>Daftar Produk
                                <a href="add-product.php"><button class="pull-right btn btn-success">Tambah</button></a></h3>
                            <div class="table-responsive">
                                <table id="tbl" class="table-striped table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>Harga</th>
                                            <th>Kategori</th>
                                            <th>Aktif</th>
                                            <th>Promo Aktif</th>
                                            <th>Ubah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $list = mysqli_query($conn, "SELECT * FROM mi_view_product");

                                        while ($row = mysqli_fetch_assoc($list)) 
                                          {
                                            $no = $row['product_code'];
                                            $name = $row['product_name'];
                                            $price = $row['product_price'];
                                            $subsubcategory = $row['subsubcategory_name'];
                                            $active = $row['product_active'];
                                            $promo = $row['promo'];
                                            
                                            echo "
                                            <tr>
                                              <td>".$no."</td>
                                              <td>".$name."</td>
                                              <td>".$price."</td>
                                              <td>".$subsubcategory."</td>
                                              <td>".$active."</td>
                                              <td>".$promo."</td>
                                              <td><a href='edit-product.php?pid=".$no."'>Ubah</a></td>
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

<!-- DATA TABLES -->
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#tbl').DataTable();
        $('.input-sm').height('20px');
    } );
</script>
<?php

       
    ?>
</html>
