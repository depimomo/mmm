<?php
	require 'includes/connect.php';
	require 'includes/logged-in.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'templates/header.html' ?>
    <title>Millenia Admin | Edit Produk</title>
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
            $sql = "SELECT * FROM mi_product WHERE product_code = '$pid'";

            $list = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($list)) {
                $name = $row['product_name'];
                $desc = $row['product_desc'];
                $weight = $row['product_weight'];
                $price = $row['product_price'];
                $bulk1 = $row['product_price_grosir1'];
                $bulk2 = $row['product_price_grosir2'];
                $bulk3 = $row['product_price_grosir3'];
                $detail = $row['product_detail'];
                $detailsize = $row['product_size_detail'];
                $active = $row['product_active'];

            }
            
        ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-12">
                        <h4 class="page-title">Edit Produk</h4>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Beranda</a></li>
                            <li><a href="product.php">Atur Produk</a></li>
                            <li class="active">Edit Produk</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material" method="post" action="edit-product.php?pid=<?php echo $pid ?>">
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><h3 class="panel-title" style="color: #30AEC9">
                                          Informasi Dasar
                                            </h3></a>
                                        </div>
                                        <div id="collapse1" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-md-12">Nama Produk</label>
                                                    <div class="col-md-12">
                                                        <input type="text" class="form-control form-control-line" name="name" required="yes" disabled value="<?php echo $name?>"> </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Status Produk</label>
                                                    <div class='pretty info curvy a-jelly col-lg-2 col-md-6 col-sm-6'>
                                                        <input type='checkbox' name='aktif' value='Y' <?php if($active=='Y') echo "checked" ?> /> 
                                                        <label><i class='glyphicon glyphicon-ok'></i>  Aktif</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Deskripsi singkat</label>
                                                    <div class="col-md-12">
                                                        <textarea rows="4" class="form-control form-control-line" name="desc" required="yes"><?php echo $desc ?></textarea>  </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Berat (gram)</label>
                                                    <div class="col-md-12">
                                                        <input type="number" class="form-control form-control-line" autocomplete="off" maxlength="50" name="weight" required="yes" value="<?php echo $weight?>" step="any" min="0" />
                                                         </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Harga</label>
                                                    <div class="col-md-12 money">
                                                        <input type="text" class="numberOnly form-control form-control-line" autocomplete="off" maxlength="50" name="price" value="<?php echo $price ?>" />
                                                         </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Harga Grosir</label>
                                                    <div class='pretty info curvy a-jelly col-lg-2 col-md-6 col-sm-6'>
                                                        <input type='checkbox' name='grosir[]' value='1' <?php if($bulk1>0) echo "checked" ?> /> 
                                                        <label><i class='glyphicon glyphicon-ok'></i>  3 - 6 Produk (10%)</label>
                                                    </div>
                                                    <div class='pretty info curvy a-jelly col-lg-2 col-md-6 col-sm-6'>
                                                        <input type='checkbox' name='grosir[]' value='2' <?php if($bulk2>0) echo "checked" ?> /> 
                                                        <label><i class='glyphicon glyphicon-ok'></i>  7 - 11 Produk (15%)</label>
                                                    </div>
                                                    <div class='pretty info curvy a-jelly col-lg-2 col-md-6 col-sm-6'>
                                                        <input type='checkbox' name='grosir[]' value='3' <?php if($bulk3>0) echo "checked" ?> /> 
                                                        <label><i class='glyphicon glyphicon-ok'></i>  > 11 Produk (20%)</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.panel-body-->
                                        </div>
                                    </div>
                                    <!-- /.panel-default-->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><h3 class="panel-title" style="color: #30AEC9">
                                          Detail Produk
                                            </h3></a>
                                        </div>
                                        <div id="collapse2" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-md-12">Rincian Produk</label>
                                                    <div class="col-md-12">
                                                        <textarea placeholder="Rincian produk: Jangan dicuci dengan air mendidih. Dapat juga memasukkan gambar-gambar detail produk dan detail ukuran." class="sn" name="detail"><?php echo $detail ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Detail Ukuran</label>
                                                    <div class="col-md-12">
                                                        <textarea placeholder="Masukkan detail ukuran seperti lingkar dada, pinggang, dan panjang." class="sn" name="size_detail"><?php echo $detailsize ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.panel-body-->
                                        </div>
                                    </div>
                                    <!-- /.panel-default-->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><h3 class="panel-title" style="color: #30AEC9">
                                          Variasi
                                            </h3></a>
                                        </div>
                                        <div id="collapse3" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <div class="col-md-12 repeater" style="margin-bottom:20px">
                                                        <?php
                                                            // Select and show all varian, make only stock field editable
                                                            $sql2 = "SELECT c.prod_color_id, c.color_id, co.color_name, s.size_id, si.size_name, s.prod_size_stock FROM mi_prod_color AS c, mi_color AS co, mi_prod_size AS s, mi_size AS si WHERE c.color_id = co.color_id AND s.size_id = si.size_id AND c.prod_color_id = s.prod_color_id AND c.product_no = $pid";
                                                            $list2 = mysqli_query($conn, $sql2);
                                                            $x = 0;
                                                            $colors = array();
                                                            $sizes = array();

                                                            while ($row = mysqli_fetch_assoc($list2)) {
                                                                $x++;
                                                                $stock = $row['prod_size_stock'];
                                                                $colid = $row['color_id'];
                                                                $colname = $row['color_name'];
                                                                $sizeid = $row['size_id'];
                                                                $sizename = $row['size_name'];

                                                                array_push($colors, $colid);
                                                                array_push($sizes, $row['prod_color_id']);
                                                                ?>

                                                                <div class="repeat-<?php echo $x?> col-md-12" style="margin-bottom:20px;">
                                                                    <select disabled name="color-<?php echo $x?>" class="col-md-3 form-control-line" style="margin-right: 5%;" id="color-<?php echo $x?>" required="yes">
                                                                        <option value="<?php echo $colid?>"><?php echo $colname?></option>                                                                              
                                                                    </select>
                                                                    <select disabled name="size-<?php echo $x?>" class="col-md-3 form-control-line" style="margin-right: 5%;" id="size-<?php echo $x?>" required="yes">
                                                                        <option value="<?php echo $sizeid?>"><?php echo $sizename?></option>
                                                                    </select>
                                                                    <input type="number" style="margin-right: 5%;" placeholder="Stok" class="col-md-3 form-control-line" autocomplete="off" maxlength="50" name="stock-<?php echo $x?>" required="yes" value="<?php echo $stock?>"/>
                                                                </div>
                                                                <?php
                                                            }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.panel-body-->
                                        </div>
                                    </div>
                                </div>
                                <!-- /.accordion-->
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success" type="submit" name="edit">Simpan</button>
                                    </div>
                                </div>
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
        $('.sn').summernote({
            dialogsInBody: true,
            dialogsFade: true,
            height: 500,
            minHeight: 450,
            maxHeight: 600
        });
        // disable mousewheel on a input number field when in focus
        // (to prevent Chromium browsers change the value when scrolling)
        $('form').on('focus', 'input[type=number]', function (e) {
          $(this).on('mousewheel.disableScroll', function (e) {
            e.preventDefault()
          })
        });
        $('form').on('blur', 'input[type=number]', function (e) {
          $(this).off('mousewheel.disableScroll')
        });
    });
</script>
<?php
    //check if the form has been submitted
    if(isset($_POST['edit'])) {
        //cleanup the variables
        //prevent mysql injection
        $desc = mysqli_real_escape_string($conn, $_POST['desc']);
        $active = (empty($_POST['aktif'])) ? 'N' : $_POST['aktif'];
        $price = mysqli_real_escape_string($conn, $_POST['price']);
        $detail = mysqli_real_escape_string($conn, $_POST['detail']);
        $sizedetail = mysqli_real_escape_string($conn, $_POST['size_detail']);
        $weight = mysqli_real_escape_string($conn, $_POST['weight']);
        $uname = $_SESSION['username'];
        
        $price = str_replace( ',', '', $price );

        $bulk1 = null;
        $bulk2 = null;
        $bulk3 = null;

        foreach($_POST['grosir'] as $selected){
            if($selected == 1){
                $bulk1 = 10;
            }
            if($selected == 2){
                $bulk2 = 15;
            }
            if($selected == 3){
                $bulk3 = 20;
            }
        }

        $sql3 = "UPDATE mi_product SET product_price = '$price', product_price_grosir1 = '$bulk1', product_price_grosir2 = '$bulk2', product_price_grosir3 = '$bulk3', product_weight = '$weight' WHERE product_no = $pid";
        
        if (!mysqli_query($conn, $sql3)) {
            echo "<script>alert('Gagal menambah produk, refresh halaman dan coba lagi');</script>";
        }

        $stock = array();

        for ($i = 1; $i <= count($colors); $i++) {
            if($_POST['stock-'.$i] != null){
                array_push($stock, mysqli_real_escape_string($conn, $_POST['stock-'.$i]));
            }
        }

        for ($i = 0; $i < count($colors); $i++) {
            $sql4 = "UPDATE mi_prod_size SET prod_size_stock = '$stock[$i]' WHERE prod_size_id = '$sizes[$i]'";
            
            if (mysqli_query($conn, $sql4)) {
                header("location: product.php");
            } else {
                echo "<script>alert('Gagal menambah produk, refresh halaman dan coba lagi');</script>";
            }
        }
    }
?>
</html>
