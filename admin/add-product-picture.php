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
        <?php $pid = $_GET['pid']; ?>
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
                            <form class="form-horizontal form-material" method="post" action="add-product-picture.php?pid=<?php echo $pid ?>" enctype="multipart/form-data">
                                <?php
                                    $colors = array();

                                    $sql = "SELECT product_name FROM mi_product WHERE product_no = $pid";
                                    $name = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_assoc($name)){
                                        echo "<h3>Tambah Gambar untuk ".$row['product_name']." (maks 10MB)</h3><br>";
                                    }

                                    $sql = "SELECT DISTINCT pc.color_id, color_name FROM mi_prod_color AS pc, mi_color AS mc WHERE product_no = $pid and pc.color_id = mc.color_id";
                                    $list = mysqli_query($conn, $sql);

                                    while ($row = mysqli_fetch_assoc($list)) 
                                    {
                                        $color_id = $row['color_id'];

                                        array_push($colors, $color_id);

                                        $color_name = $row['color_name'];
                                        ?>
                                        <div class="form-group">
                                            <label class="col-md-12"><?php echo($color_name) ?></label>
                                            <div class="col-md-12">
                                                <img id="<?php echo($color_id) ?>" height="100" />
                                                <input name="img<?php echo($color_id) ?>" type="file" onchange="document.getElementById('<?php echo($color_id) ?>').src = window.URL.createObjectURL(this.files[0])">
                                            </div>
                                        </div><br>
                                    <?php
                                    }
                                ?>

                                <div class="form-group">
                                    <label class="col-md-12">Gambar utama</label>
                                    <div class="col-md-12">
                                        <select name="utama" class="col-md-3 form-control-line" style="margin-right: 5%;" required="yes">
                                            <?php
                                                $sql = "SELECT DISTINCT pc.color_id, color_name FROM mi_prod_color AS pc, mi_color AS mc WHERE product_no = $pid and pc.color_id = mc.color_id";
                                                $list = mysqli_query($conn, $sql);
                                                while ($row = mysqli_fetch_assoc($list)) 
                                                {
                                                    $color_id = $row['color_id'];
                                                    $color_name = $row['color_name'];
                                                    echo "<option value='".$color_id."'>".$color_name."</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success" type="submit" name="tambah">Selesai</button>
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
<?php
    if(isset($_POST['tambah'])) {
        //preparing upload picture
        $target_dir = "../images/";
        $primary = mysql_real_escape_string($_POST['utama']);

        for ($i = 0; $i < count($colors); $i++) {
            $target_file = $target_dir . basename($_FILES['img'.$colors[$i]]['name']);
            echo $target_file;

            //cek jenis file
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            
            $filename = $pid . "_" . $colors[$i] . "_" . date("Ymd_His") . "." . $imageFileType;
            echo $filename;
            $simpan_file = $target_dir . $filename;

            if(!move_uploaded_file($_FILES['img'.$colors[$i]]['tmp_name'], $simpan_file)) {
                echo "<script>alert('Gagal mengupload file, periksa ukuran dan jenis file (JPG, PNG, GIF)');</script>";
            }

            if($primary == $colors[$i]) {
                $setprimary = 1;
            } else {
                $setprimary = 0;
            }

            $sql = "INSERT INTO mi_picture_color(product_no, color_id, picture_color_url, picture_color_primary) VALUES ('$pid','$colors[$i]','/images/$filename','$setprimary')";
            
            if(mysqli_query($conn, $sql)){
                header("location: product.php");
            } else {
                echo "<script>alert('Gagal menambah produk, refresh halaman dan coba lagi');</script>";
            }
        }
    }
?>
</html>
