<?php
	require 'includes/connect.php';
	require 'includes/logged-in.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'templates/header.html' ?>
    <title>Millenia Admin | Beranda</title>
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
                        <h4 class="page-title">Atur Banner</h4>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Beranda</a></li>
                            <li><a class="active">Atur Banner</a></li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box" style="height: 1200px">
                            <form style="margin-bottom: 5%" class="form-horizontal form-material col-lg-5" method="post" action="manage-banner.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="col-md-12">Tambah Banner Baru (Ukuran Banner 1366 x 400)</label>
                                    <div class="col-md-12">
                                        <img id="x" height="100" />
                                        <input name="banner" type="file" onchange="document.getElementById('x').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <div class="col-md-12" style="margin-top: 5%">
                                        <button class="btn btn-success" type="submit" name="tambah">Selesai</button>
                                    </div>
                                </div>
                            </form>
                            <div class="col-lg-7">
                                <h3>Daftar Banner</h3>
                                <div class="table-responsive">
                                    <table id="tbl" class="table-striped table">
                                        <thead>
                                            <tr>
                                                <th>Banner</th>
                                                <th>Hapus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $list = mysqli_query($conn, "SELECT * FROM mi_banner WHERE banner_active = 'Y' AND banner_type = 'HOME'");

                                            while ($row = mysqli_fetch_assoc($list)) {
                                                $id = $row['banner_id'];
                                                $url = $row['banner_url'];
                                                
                                                echo "
                                                <tr>
                                                  <td><img width= '500px' src='../".$url."'></img></td>
                                                  <td><a data-toggle='modal' data-target='#myModal' data-id='".$id."' style='color: red;cursor: pointer;' class='hapus'>Hapus</a></td>
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

        $target_file = $target_dir . basename($_FILES['banner']['name']);

        //cek jenis file
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        
        $filename = date("Ymd_His") . "." . $imageFileType;

        $simpan_file = $target_dir . $filename;

        if(!move_uploaded_file($_FILES['banner']['tmp_name'], $simpan_file)) {
            echo "<script>alert('Gagal mengupload file, periksa ukuran dan jenis file (JPG, PNG, GIF)');</script>";
        }

        $user = $_SESSION['username'];

        $sql = "INSERT INTO mi_banner(banner_url, banner_created_user) VALUES ('images/$filename','$user')";
        
        if(mysqli_query($conn, $sql)){
            header("location: manage-banner.php");
        } else {
            echo "<script>alert('Gagal menambah banner, refresh halaman dan coba lagi');</script>";
        }
    }
?>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <form method="post" action="manage-banner.php">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Hapus Banner</h4>
      </div>
      <div class="modal-body">
        <p>Apakah Anda yakin ingin menghapus Banner ini?</p>
            <input type="hidden" id="idku" name="idku">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-success" type="submit" name="hapus">Hapus</button>
      </div>
    </div>
    </form>
  </div>
</div>

<script type="text/javascript">
    $(document).on("click", ".hapus", function () {
        var idku = $(this).data('id');
        $(".modal-body #idku").val(idku);
    });
</script>
<?php
    if(isset($_POST['hapus'])) {
        $idku = $_POST['idku'];
        $sql = "UPDATE mi_banner SET banner_active='N' WHERE banner_id = '$idku'";
        if(mysqli_query($conn, $sql)){
            header("location: manage-banner.php");
        } else {
            echo "<script>alert('Gagal menghapus banner, refresh halaman dan coba lagi');</script>";
        }
    }
?>
</html>
