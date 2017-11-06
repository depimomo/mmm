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
                            <li><a href="manage-promo.php">Atur Promo</a></li>
                            <li class="active">Tambah Promo</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material" method="post" action="add-promo.php">
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
                                                          <td><input required type='radio' name='products[]' value='".$no."'</td>
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
                                    <label class="col-md-12">Harga Promo</label>
                                    <div class="col-md-12 money">
                                        <input type="text" class="numberOnly form-control form-control-line" autocomplete="off" maxlength="50" name="promo" />
                                         </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-md-12">Jenis Promo</label>
                                    <div class="col-md-12">
                                        <select name="category" class="form-control" id="category" required="yes">
                                            <option value="clearance">Clearance</option>
                                            <option value="quantity">Quantity</option>
                                            <option value="time">Time</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div id="placeholder"></div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success" type="submit" name="tambah">Tambah</button>
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

        $("#category").change(function(){
            var filter = $("#category").find("option:selected").val();
            var isi = "";

            if(filter == 'quantity'){
                isi =  '<div class="form-group change">'+
                                '<label class="col-md-12">Quantity</label>'+
                                '<div class="col-md-12">'+
                                    '<input type="number" class="form-control form-control-line" autocomplete="off" name="qty" />'+
                                     '</div>'+
                            '</div>';

            } else if (filter == 'time') {
                isi =  '<div class="form-group change">'+
                                '<label class="col-md-12">Tanggal Mulai</label>'+
                                '<div class="col-md-12">'+
                                    '<input type="text" class="date form-control form-control-line" readonly name="mulai">'+
                                '</div>'+
                        '</div>'+
                        '<div class="form-group change">'+
                                '<label class="col-md-12">Tanggal Selesai</label>'+
                                '<div class="col-md-12">'+
                                    '<input type="text" class="date form-control form-control-line" readonly name="selesai">'+
                                '</div>'+
                        '</div>';
            }
            
            $(".change").remove();
            $("#placeholder").append(isi);
            $('.date').appendDtpicker();
        });
    });
</script>

<?php

    //check if the form has been submitted
    if(isset($_POST['tambah'])) {
        //cleanup the variables
        //prevent mysql injection
        
        foreach($_POST['products'] as $selected){
            $products = mysql_real_escape_string($selected);
        }

        $promo = mysql_real_escape_string($_POST['promo']);
        $promo = str_replace( ',', '', $promo );
        $category = mysql_real_escape_string($_POST['category']);

        $sql='';

        if($category == 'quantity') {
            $qty = mysql_real_escape_string($_POST['qty']);
            $sql = "UPDATE mi_product SET product_qty_active='Y', product_qty_sale='$qty', product_promo_price='$promo' WHERE product_no='$products'";
        } elseif ($category == 'time') {
            $datetimem = mysql_real_escape_string($_POST['mulai']);
            $datetime = mysql_real_escape_string($_POST['selesai']);
            $splitm = explode(" ", $datetimem);
            $split = explode(" ", $datetime);
            $sql = "UPDATE mi_product SET product_time_active='Y', product_time_day='$splitm[0]',product_time_hour='$splitm[1]', product_time_day_end='$split[0]',product_time_hour_end='$split[1]', product_promo_price='$promo' WHERE product_no='$products'";
        } elseif ($category == 'clearance') {
            $sql = "UPDATE mi_product SET product_clearance_active='Y', product_promo_price='$promo' WHERE product_no='$products'";        
        }

        if (!mysqli_query($conn, $sql)) {
            echo "<script>alert('Gagal menambah promo, refresh halaman dan coba lagi');</script>";
        } else {
            header("location: manage-promo.php");
        }
    }
?>
</html>
