<?php
	require 'includes/connect.php';
	require 'includes/logged-in.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'templates/header.html' ?>
    <title>Millenia Admin | Tambah Produk</title>
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
                        <h4 class="page-title">Tambah Produk</h4>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Beranda</a></li>
                            <li><a href="product.php">Atur Produk</a></li>
                            <li class="active">Tambah Produk</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material" method="post" action="add-product.php">
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
                                                        <input type="text" class="form-control form-control-line" name="name" required="yes"> </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Kode Produk</label>
                                                    <div class="col-md-12">
                                                        <input type="text" class="form-control form-control-line" name="product_code" required="yes"> </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Deskripsi singkat</label>
                                                    <div class="col-md-12">
                                                        <textarea rows="4" class="form-control form-control-line" name="desc" required="yes"></textarea>  </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Berat (kg)</label>
                                                    <div class="col-md-12 money">
                                                        <input type="number" class="form-control form-control-line" autocomplete="off" maxlength="50" name="weight" required="yes"/>
                                                         </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Harga</label>
                                                    <div class="col-md-12 money">
                                                        <input type="text" class="numberOnly form-control form-control-line" autocomplete="off" maxlength="50" name="price"/>
                                                         </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Harga Grosir</label>
                                                    <div class='pretty info curvy a-jelly col-lg-2 col-md-6 col-sm-6'>
                                                        <input type='checkbox' name='grosir[]' value='1'/> 
                                                        <label><i class='glyphicon glyphicon-ok'></i>  3 - 6 Produk (10%)</label>
                                                    </div>
                                                    <div class='pretty info curvy a-jelly col-lg-2 col-md-6 col-sm-6'>
                                                        <input type='checkbox' name='grosir[]' value='2'/> 
                                                        <label><i class='glyphicon glyphicon-ok'></i>  7 - 11 Produk (15%)</label>
                                                    </div>
                                                    <div class='pretty info curvy a-jelly col-lg-2 col-md-6 col-sm-6'>
                                                        <input type='checkbox' name='grosir[]' value='3'/> 
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
                                                    <label class="col-md-12">Kategori</label>
                                                    <div class="col-md-12">
                                                        <select name="category" class="form-control form-control-line" id="category" required="yes">
                                                            <option value="1">Pakaian Pria</option>
                                                            <option value="2">Pakaian Wanita</option>
                                                            <option value="3">Pakaian Anak</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Sub Kategori</label>
                                                    <div class="col-md-12">
                                                        <select id="subcategory" name="subcategory" class="form-control form-control-line" id="subcategory" required="yes">
                                                            <option class="subchange">-Pilih Kategori Dulu-</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Sub Sub Kategori</label>
                                                    <div class="col-md-12">
                                                        <select id="subsubcategory" name="subsubcategory" class="form-control form-control-line" id="subsubcategory" required="yes">
                                                            <option class="subsubchange">-Pilih Sub Kategori Dulu-</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Rincian Produk</label>
                                                    <div class="col-md-12">
                                                        <textarea placeholder="Rincian produk: Jangan dicuci dengan air mendidih. Dapat juga memasukkan gambar-gambar detail produk dan detail ukuran." class="sn" name="detail"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Detail Ukuran</label>
                                                    <div class="col-md-12">
                                                        <textarea placeholder="Masukkan detail ukuran seperti lingkar dada, pinggang, dan panjang." class="sn" name="size_detail"></textarea>
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
                                                        <div class="repeat-1 col-md-12" style="margin-bottom:20px;">
                                                            <select name="color-1" class="col-md-3 form-control-line" style="margin-right: 5%;" id="color-1" required="yes">
                                                                <?php
                                                                    $list = mysqli_query($conn, "SELECT * FROM mi_color WHERE color_active = 'Y'");

                                                                    while ($row = mysqli_fetch_assoc($list)) 
                                                                      {
                                                                        $color_id = $row['color_id'];
                                                                        $color_name = $row['color_name'];
                                                                        
                                                                        echo "
                                                                        <option value='".$color_id."'>".$color_name."</option>";
                                                                      }
                                                                    ?>
                                                            </select>
                                                            <select name="size-1" class="col-md-3 form-control-line" style="margin-right: 5%;" id="size-1" required="yes">
                                                                <?php
                                                                    $list = mysqli_query($conn, "SELECT * FROM mi_size WHERE size_active = 'Y'");

                                                                    while ($row = mysqli_fetch_assoc($list)) 
                                                                      {
                                                                        $size_id = $row['size_id'];
                                                                        $size_name = $row['size_name'];
                                                                        
                                                                        echo "
                                                                        <option value='".$size_id."'>".$size_name."</option>";
                                                                      }
                                                                    ?>
                                                            </select>
                                                            <input type="number" style="margin-right: 5%;" placeholder="Stok" class="col-md-3 form-control-line" autocomplete="off" maxlength="50" name="stock-1" required="yes"/>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="tambah-variasi" style="margin-left: 20px; padding-top: 20px; color: #30AEC9"> + Tambah Variasi </a>
                                                </div>
                                            </div>
                                            <!-- /.panel-body-->
                                        </div>
                                    </div>
                                </div>
                                <!-- /.accordion-->
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success" type="submit" name="tambah">Lanjut</button>
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
        var max_fields      = 100; //maximum input boxes allowed
        var wrapper         = $(".repeater"); //Fields wrapper
        var add_button      = $(".tambah-variasi"); //Add button ID
        
        var x = 1; //initlal text box count
        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            if(x < max_fields){ //max input box allowed
                x++; //text box increment
                var textt = '<div class="repeat-'+x+' col-md-12" style="margin-bottom:20px;">';
                textt += '<select name="color-'+x+'" class="col-md-3 form-control-line" style="margin-right: 5%;" id="color-'+x+'" required="yes">';
                    <?php
                        $list = mysqli_query($conn, "SELECT * FROM mi_color WHERE color_active = 'Y'");

                        while ($row = mysqli_fetch_assoc($list)) 
                          {
                            $color_id = $row['color_id'];
                            $color_name = $row['color_name'];
                            
                            ?>
                            textt += "<?php echo "<option value='".$color_id."'>".$color_name."</option>";?>";
                        <?php
                          }
                        ?>
                textt += '</select>';
                textt += '<select name="size-'+x+'" class="col-md-3 form-control-line" style="margin-right: 5%;" id="size-'+x+'" required="yes">';
                    <?php
                        $list = mysqli_query($conn, "SELECT * FROM mi_size WHERE size_active = 'Y'");

                        while ($row = mysqli_fetch_assoc($list)) 
                          {
                            $size_id = $row['size_id'];
                            $size_name = $row['size_name'];?>
                            textt += "<?php echo "<option value='".$size_id."'>".$size_name."</option>";?>";
                          <?php
                          }
                        ?>
                textt += '</select>';
                textt += '<input type="number" placeholder="Stok" class="col-md-3 form-control-line" autocomplete="off" maxlength="50" name="stock-'+x+'" required="yes" style="margin-right: 5%;"/>';
                textt += '<a href="#" class="remove_field col-md-1 form-control-line" style="color: #30AEC9">Hapus</a>';
                textt += '</div>';
                $(wrapper).append(textt); //add input box
            }
        });
        
        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent('div').remove();
        });

        $('.sn').summernote({
            dialogsInBody: true,
            dialogsFade: true,
            height: 500,
            minHeight: 450,
            maxHeight: 600
        });

        $("#category").change(function(){
            var filter = $("#category").find("option:selected").val();
            $.post('includes/subcategory.php', {filter : filter}, function(data) {
                $(".subchange").remove();
                $("#subcategory").append(data);
            });
        });
        $("#subcategory").change(function(){
            var filter2 = $("#subcategory").find("option:selected").val();
            $.post('includes/subsubcategory.php', {filter : filter2}, function(data) {
                $(".subsubchange").remove();
                $("#subsubcategory").append(data);
            });
        });
    });
</script>
<?php

        $message = '';

        //check if the form has been submitted
        if(isset($_POST['tambah'])) {
            //cleanup the variables
            //prevent mysql injection
            $name = mysql_real_escape_string($_POST['name']);
            $procuctcode = mysql_real_escape_string($_POST['product_code']);
            $desc = mysql_real_escape_string($_POST['desc']);
            $price = mysql_real_escape_string($_POST['price']);
            $weight = mysql_real_escape_string($_POST['weight']);
            $subsubcategory = mysql_real_escape_string($_POST['subsubcategory']);
            $detail = mysql_real_escape_string($_POST['detail']);
            $sizedetail = mysql_real_escape_string($_POST['size_detail']);
            $uname = $_SESSION['username'];
            
            $price = str_replace( ',', '', $price );
            $weight = str_replace( ',', '', $weight );

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

            $sql = "INSERT INTO mi_product(product_code, product_name, product_price, product_price_grosir1, product_price_grosir2, product_price_grosir3, product_weight, product_subsubcategory_id, product_desc, product_detail, product_size_detail, product_created_user) VALUES ('$procuctcode', '$name','$price','$bulk1','$bulk2','$bulk3','$weight','$subsubcategory','$desc', '$detail', '$sizedetail', '$uname')";
            
            if (mysqli_query($conn, $sql)) {
                $prod_id = mysqli_insert_id($conn);
                //header("location: add-picture.php");
            } else {
                echo "<script>alert('Gagal menambah produk, refresh halaman dan coba lagi');</script>";
            }

            $color = array();
            $size = array();
            $stock = array();

            for ($i = 1; $i <= 50; $i++) {
                if($_POST['color-'.$i] != null){
                    array_push($color, mysql_real_escape_string($_POST['color-'.$i]));
                    array_push($size, mysql_real_escape_string($_POST['size-'.$i]));
                    array_push($stock, mysql_real_escape_string($_POST['stock-'.$i]));
                }
            }

            for ($i = 0; $i < count($color); $i++) {
                $ins = "INSERT INTO mi_prod_color(product_no, color_id) VALUES ('$prod_id', '$color[$i]')";

                if (mysqli_query($conn, $ins)) {
                    $col_id = mysqli_insert_id($conn);
                } else {
                    echo "<script>alert('Gagal menambah produk, refresh halaman dan coba lagi');</script>";
                }

                $ins2 = "INSERT INTO mi_prod_size(prod_color_id, size_id, prod_size_stock) VALUES ('$col_id', '$size[$i]', '$stock[$i]')";
                
                if (mysqli_query($conn, $ins2)) {
                    header("location: add-product-picture.php?pid=".$prod_id);
                } else {
                    echo "<script>alert('Gagal menambah produk, refresh halaman dan coba lagi');</script>";
                }
            }
        }
    ?>
</html>
