<?php
	require 'includes/connect.php';
	require 'includes/logged-in.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'templates/header.html' ?>
    <title>Millenia Admin | Millenia of thes Month</title>
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
                        <h4 class="page-title">Millenia of the Month</h4>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Beranda</a></li>
                            <li class="active">MOTM</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <h3>Millenia of the Month</h3>
                            <div class="table-responsive">
                                <table id="tbl2" class="table-striped table">
                                    <thead>
                                        <tr>
                                            <th>Kode Produk</th>
                                            <th>Gambar</th>
                                            <th>Nama Produk</th>
                                            <th>Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $list = mysqli_query($conn, "SELECT p.product_no, p.product_code, p.product_name, p.product_price, v.picture_color_url FROM mi_product p JOIN mi_view_product v WHERE p.product_motm = 'Y' AND p.product_active = 'Y' AND p.product_no = v.product_no");

                                        $id_motm = 0;

                                        while ($row = mysqli_fetch_assoc($list)) 
                                          {
                                            $id_motm = $row['product_no'];
                                            $id = $row['product_code'];
                                            $img = $row['picture_color_url'];
                                            $name = $row['product_name'];
                                            $price = $row['product_price'];
    
                                            echo "
                                            <tr class='result'>
                                              <td>".$id."</td>
                                              <td><img src='../".$img."' height='100px'></img></td>
                                              <td>".$name."</td>
                                              <td>".$price."</td>
                                            </tr>
                                            ";
                                          }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <h3 style="margin-top: 2%"> Ubah MOTM </h3>
                                <form class="form-horizontal form-material" method="post" action="motm.php">
                                <input hidden="true" name="current_motm" value="<?php echo $id_motm; ?>">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table id="tbl" class="table-striped table">
                                                <thead>
                                                    <tr>
                                                        <th>Pilih</th>
                                                        <th>ID</th>
                                                        <th>Gambar</th>
                                                        <th>Nama</th>
                                                        <th>Harga</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $list = mysqli_query($conn, "SELECT p.product_no, p.product_code, p.product_name, p.product_price, v.picture_color_url FROM mi_product p JOIN mi_view_product v WHERE p.product_motm = 'N' AND p.product_active = 'Y' AND p.product_no = v.product_no");

                                                    while ($row = mysqli_fetch_assoc($list)) 
                                                      {
                                                        $no = $row['product_no'];
                                                        $id = $row['product_code'];
                                                        $img = $row['picture_color_url'];
                                                        $name = $row['product_name'];
                                                        $price = $row['product_price'];
                                                        
                                                        echo "
                                                        <tr class='result'>
                                                          <td><input required type='radio' name='products[]' value='".$no."'</td>
                                                          <td>".$id."</td>
                                                          <td><img src='../".$img."' height='100px'></img></td>
                                                          <td>".$name."</td>
                                                          <td>".$price."</td>
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
                                <div id="placeholder"></div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success" type="submit" name="ubah">Ubah</button>
                                    </div>
                                </div>
                                <!-- /.form-group -->
                            </form>
                            <h3 style="margin-top: 2%"> Banner MOTM </h3>
                            <?php
                            $banner_id = 0;
                            $list = mysqli_query($conn, "SELECT * FROM mi_banner WHERE banner_active = 'Y' AND banner_type='MOTM'");

                            while ($row = mysqli_fetch_assoc($list)) {
                                $banner_id = $row['banner_id'];
                                $url = $row['banner_url'];
                                
                                echo "<img width= '500px' src='../".$url."'></img>";
                              }
                            ?>
                            <h3 style="margin-top: 2%"> Ubah Banner MOTM </h3>
                            <form class="form-horizontal form-material" method="post" action="motm.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="col-md-12">Banner Baru (Ukuran Banner 750 x 500)</label>
                                    <div class="col-md-12">
                                        <img id="x" height="100" />
                                        <input name="banner" type="file" onchange="document.getElementById('x').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <div class="col-md-12" style="margin-top: 5%">
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
<script type="text/javascript">
    $(document).ready(function() {
        $('#tbl').DataTable( {
            "scrollY":        "400px",
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
    if(isset($_POST['tambah'])) {
        //preparing upload picture
        $target_dir = "../images/";

        $target_file = $target_dir . basename($_FILES['banner']['name']);

        //cek jenis file
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        
        $filename = date("Ymd_His") . "." . $imageFileType;

        $simpan_file = $target_dir . $filename;

        if(!move_uploaded_file($_FILES['banner']['tmp_name'], $simpan_file)) {
            echo "<script>alert('Gagal mengupload file, periksa ukuran dan jenis file (JPG, PNG, GIF)');</script>";
        }

        $user = $_SESSION['username'];

        $sql = "INSERT INTO mi_banner(banner_url, banner_created_user, banner_type) VALUES ('images/$filename','$user','MOTM')";
        $sql2 = "UPDATE mi_banner SET banner_active='N' WHERE banner_id = $banner_id";
        
        if(mysqli_query($conn, $sql)){
            mysqli_query($conn, $sql2);
            header("location: motm.php");
        } else {
            echo "<script>alert('Gagal menambah banner, refresh halaman dan coba lagi');</script>";
        }
    }
?>
<?php
    //check if the form has been submitted
    if(isset($_POST['ubah'])) {
        //cleanup the variables
        //prevent mysql injection
        
        foreach($_POST['products'] as $selected){
            $id = mysqli_real_escape_string($conn, $selected);
        }

        $current_motm = $_POST['current_motm'];

        $sql = "UPDATE mi_product SET product_motm='Y' WHERE product_no='$id'";
        $sql2 = "UPDATE mi_product SET product_motm='N' WHERE product_no='$current_motm'";

        if (!mysqli_query($conn, $sql)) {
            echo "<script>alert('Gagal mengubah MOTM, refresh halaman dan coba lagi');</script>";
        } else {
            mysqli_query($conn, $sql2);
            header("location: motm.php");
        }
    }
?>
</html>
