<?php
	require 'includes/connect.php';
	require 'includes/logged-in.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'templates/header.html' ?>
    <title>Millenia Admin | Tambah Promo</title>
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
                        <h4 class="page-title">Tambah Promo</h4>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Beranda</a></li>
                            <li class="active">Tambah Promo</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material" method="post" action="edit-product.php?pid=<?php echo $pid ?>">
                                <div class="form-group">
                                    <label class="col-md-12">Pilih produk</label>
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table id="tbl" class="table-striped table">
                                                <thead>
                                                    <tr>
                                                        <th>Pilih</th>
                                                        <th>ID</th>
                                                        <th>Nama</th>
                                                        <th>Harga</th>
                                                        <th>Kategori</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $list = mysqli_query($conn, "SELECT * FROM mi_view_product WHERE LENGTH(promo) < 1");

                                                    while ($row = mysqli_fetch_assoc($list)) 
                                                      {
                                                        $no = $row['product_no'];
                                                        $id = $row['product_code'];
                                                        $name = $row['product_name'];
                                                        $price = $row['product_price'];
                                                        $category = $row['subsubcategory_name'];
                                                        
                                                        echo "
                                                        <tr class='result'>
                                                          <td><input required type='radio' name='produts[]' value='".$id."'</td>
                                                          <td>".$id."</td>
                                                          <td>".$name."</td>
                                                          <td>".$price."</td>
                                                          <td>".$category."</td>
                                                        </tr>
                                                        ";
                                                      }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.table-responsive -->
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-md-12">Jenis Promo</label>
                                    <div class="col-md-12">
                                        <select name="category" class="form-control-line" id="category" required="yes">
                                            <option value="clearance">Clearance</option>
                                            <option value="quantity">Quantity</option>
                                            <option value="time">Time</option>
                                            <option value="motm">MOTM</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.form-group -->
                            </form>
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
        $('#tbl').DataTable( {
            "scrollY":        "200px",
            "scrollCollapse": true,
            "paging":         false,
            "bLengthChange": false,
            "info": false,
            "bFilter": false
        });
        $('.input-sm').height('20px');
    });
</script>
</html>
