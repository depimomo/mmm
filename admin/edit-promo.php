<?php
	require 'includes/connect.php';
	require 'includes/logged-in.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'templates/header.html' ?>
    <title>Millenia Admin | Edit Promo</title>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
    	<?php include 'templates/navsidebar.html' ?>
        <?php 
            $pid = $_GET['pid']; 
            $sql = "SELECT * FROM mi_product WHERE product_no = '$pid'";

            $list = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($list)) {
                $code = $row['product_code'];
                $name = $row['product_name'];
                $price = $row['product_price'];
                $promo = "";
                $product_promo_price = $row['product_promo_price'];
                $product_clearance_active = $row['product_clearance_active'];
                $product_time_active = $row['product_time_active'];
                $product_qty_active = $row['product_qty_active'];
                $product_time_day = $row['product_time_day'];
                $product_time_hour = $row['product_time_hour'];
                $product_qty_sale = $row['product_qty_sale'];

                if($product_clearance_active == 'Y'){
                    $promo = "Clearance";
                } elseif ($product_time_active == 'Y') {
                    $promo = "Time";
                } else {
                    $promo = "Qty";
                }
            }
            
        ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-12">
                        <h4 class="page-title">Edit Promo</h4>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Beranda</a></li>
                            <li class="active">Edit Promo</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <p style="color: #1D98B8">Halaman ini hanya untuk mengubah konfigurasi promo yang ada, untuk mengubah jenis promo, silakan hapus promo yang ada terlebih dahulu lalu tambahkan promo kembali</p><br>
                            <form class="form-horizontal form-material" method="post" action="edit-promo.php?pid=<?php echo $pid ?>">
                                <div class="form-group">
                                    <label class="col-md-12">Nama Produk</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control form-control-line" name="name" required="yes" disabled value="<?php echo $name?>"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Harga</label>
                                    <div class="col-md-12 money">
                                        <input type="text" class="numberOnly form-control form-control-line" autocomplete="off" disabled maxlength="50" name="price" value="<?php echo $price ?>" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Jenis Promo</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control form-control-line" name="jenis" required="yes" readonly value="<?php echo $promo ?>">
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-md-12">Harga Promo</label>
                                    <div class="col-md-12 money">
                                        <input type="text" class="numberOnly form-control form-control-line" autocomplete="off" maxlength="50" name="promo" value="<?php echo $product_promo_price ?>" />
                                         </div>
                                </div>
                                <!-- /.form-group -->
                                <?php
                                    if($promo == 'Time') {
                                        ?>
                                        <div class="form-group change">
                                                <label class="col-md-12">Tanggal Selesai</label>
                                                <div class="col-md-12">
                                                    <input type="text" class="date form-control form-control-line" readonly name="selesai" value="<?php echo $product_time_day.' '.$product_time_hour ?>">
                                                </div>
                                        </div>
                                        <?php
                                    } elseif ($promo == 'Qty') {
                                        ?>
                                        <div class="form-group change">
                                            <label class="col-md-12">Quantity</label>
                                            <div class="col-md-12">
                                                <input type="number" class="form-control form-control-line" autocomplete="off" name="qty" value="<?php echo $product_qty_sale ?>" />
                                                 </div>
                                        </div>
                                        <?php
                                    }
                                ?>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success" type="submit" name="tambah">Ubah</button>
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
        $('.date').appendDtpicker();
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

<?php

    //check if the form has been submitted
    if(isset($_POST['tambah'])) {
        //cleanup the variables
        //prevent mysql injection
        
        $promo = mysql_real_escape_string($_POST['promo']);
        $promo = str_replace( ',', '', $promo );
        $category = mysql_real_escape_string($_POST['jenis']);

        $sql='';

        if($category == 'Qty') {
            $qty = mysql_real_escape_string($_POST['qty']);
            $sql = "UPDATE mi_product SET product_qty_sale='$qty', product_promo_price='$promo' WHERE product_no='$pid'";
        } elseif ($category == 'Time') {
            $datetime = mysql_real_escape_string($_POST['selesai']);
            $split = explode(" ", $datetime);
            $sql = "UPDATE mi_product SET product_time_day='$split[0]',product_time_hour='$split[1]', product_promo_price='$promo' WHERE product_no='$pid'";
        } elseif ($category == 'Clearance') {
            $sql = "UPDATE mi_product SET product_promo_price='$promo' WHERE product_no='$pid'";        
        }

        if (!mysqli_query($conn, $sql)) {
            echo "<script>alert('Gagal menambah promo, refresh halaman dan coba lagi');</script>";
        } else {
            header("location: manage-promo.php");
        }
    }
?>
</html>
