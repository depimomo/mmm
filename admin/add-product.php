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
                            <form class="form-horizontal form-material" method="post" action="add-product.php" enctype="multipart/form-data">
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
                                                    <label class="col-md-12">Deskripsi singkat</label>
                                                    <div class="col-md-12">
                                                        <textarea rows="4" class="form-control form-control-line" name="desc" required="yes"></textarea>  </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Berat (gram)</label>
                                                    <div class="col-md-12 money">
                                                        <input type="text" class="numberOnly form-control form-control-line" autocomplete="off" maxlength="50" name="weight" required="yes"/>
                                                         </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Harga</label>
                                                    <div class="col-md-12 money">
                                                        <input type="text" class="numberOnly form-control form-control-line" autocomplete="off" maxlength="50" name="price" required="yes"/>
                                                         </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Harga Grosir 1 (6-10 produk)</label>
                                                    <div class="col-md-12 money">
                                                        <input type="text" class="numberOnly form-control form-control-line" autocomplete="off" maxlength="50" name="bulk1" required="yes"/>
                                                         </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Harga Grosir 2 (11-20 produk)</label>
                                                    <div class="col-md-12 money">
                                                        <input type="text" class="numberOnly form-control form-control-line" autocomplete="off" maxlength="50" name="bulk2" required="yes"/>
                                                         </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Harga Grosir 3 (>20 produk)</label>
                                                    <div class="col-md-12 money">
                                                        <input type="text" class="numberOnly form-control form-control-line" autocomplete="off" maxlength="50" name="bulk3" required="yes"/>
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
                                                        <div id="summernote" name="rincian"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Detail Ukuran</label>
                                                    <div class="col-md-12">
                                                        <div id="summernote2" name="detailukuran"></div>
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
                                                            <input type="text" style="margin-right: 5%;" placeholder="Stok" class="numberOnly col-md-3 form-control-line" autocomplete="off" maxlength="50" name="stock-1" required="yes"/>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="tambah-variasi" style="margin-left: 20px; padding-top: 20px; color: #30AEC9"> + Tambah Variasi </a>
                                                </div>
                                            </div>
                                            <!-- /.panel-body-->
                                        </div>
                                    </div>
                                    <!-- /.panel-default-->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><h3 class="panel-title" style="color: #30AEC9">
                                          Gambar
                                            </h3></a>
                                        </div>
                                        <div id="collapse4" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-md-12">Gambar (dapat memilih beberapa sekaligus)</label>
                                                    <div class="col-md-12">
                                                        <input type="file" class="form-control form-control-line" name="picture[]" required="yes" multiple="yes"> </div>
                                                </div>
                                            </div>
                                            <!-- /.panel-body-->
                                        </div>
                                    </div>
                                    <!-- /.panel-default-->
                                </div>
                                <!-- /.accordion-->
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success" type="submit" name="tambah">Tambah</button>
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
                textt += '<input type="text" placeholder="Stok" class="numberOnly col-md-3 form-control-line" autocomplete="off" maxlength="50" name="stock-'+x+'" required="yes" style="margin-right: 5%;"/>';
                textt += '<a href="#" class="remove_field col-md-1 form-control-line" style="color: #30AEC9">Hapus</a>';
                textt += '</div>';
                $(wrapper).append(textt); //add input box
            }
        });
        
        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent('div').remove();
        });

        $('#summernote').summernote({
            placeholder: 'Rincian produk: Jangan dicuci dengan air mendidih. Dapat juga memasukkan gambar-gambar detail produk dan detail ukuran.',
            dialogsInBody: true,
            dialogsFade: true,
            height: 500,
            minHeight: 450,
            maxHeight: 600
        });
        $('#summernote2').summernote({
            placeholder: 'Masukkan detail ukuran seperti lingkar dada, pinggang, dan panjang.',
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
            $desc = mysql_real_escape_string($_POST['desc']);
            $price = mysql_real_escape_string($_POST['price']);
            $bulk1 = mysql_real_escape_string($_POST['bulk1']);
            $bulk2 = mysql_real_escape_string($_POST['bulk2']);
            $bulk3 = mysql_real_escape_string($_POST['bulk3']);
            $stock = mysql_real_escape_string($_POST['stock']);
            $weight = mysql_real_escape_string($_POST['weight']);
            $category = mysql_real_escape_string($_POST['category']);
            $subcategory = mysql_real_escape_string($_POST['subcategory']);
            $subsubcategory = mysql_real_escape_string($_POST['subsubcategory']);
            
            $price = str_replace( ',', '', $harga );
            $bulk1 = str_replace( ',', '', $bulk1 );
            $bulk2 = str_replace( ',', '', $bulk2 );
            $bulk3 = str_replace( ',', '', $bulk3 );
            $stock = str_replace( ',', '', $stock );
            $weight = str_replace( ',', '', $weight );
        }
    ?>
</html>
