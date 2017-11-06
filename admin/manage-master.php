<?php
	require 'includes/connect.php';
	require 'includes/logged-in.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'templates/header.html' ?>
    <title>Millenia Admin | Atur Master</title>
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
                        <h4 class="page-title">Atur Master</h4>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Beranda</a></li>
                            <li class="active">Atur Master</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box col-lg-6 col-md-6 col-sm-12"  style="min-height: 900px">
                            <form class="form-horizontal form-material" style="margin-bottom: 50px" method="post" action="manage-master.php">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="text" style="width: 75%" placeholder="Warna Baru" class="form-control form-control-line" name="color" required="yes"> 
                                        <button class="btn btn-success pull-right" style="margin-top: -35px" type="submit" name="newcolor">Tambah</button>
                                    </div>
                                </div>
                            </form>
                                <h3>Daftar Warna</h3>
                            <div class="table-responsive">
                                <table class="table-striped table">
                                    <thead>
                                        <tr>
                                            <th>Warna</th>
                                            <th>Edit</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $list = mysqli_query($conn, "SELECT * FROM mi_color WHERE color_active='Y'");

                                        while ($row = mysqli_fetch_assoc($list)) 
                                          {
                                            $id = $row['color_id'];
                                            $name = $row['color_name'];
                                            
                                            echo "
                                            <tr>
                                              <td>".$name."</td>
                                              <td><a data-toggle='modal' data-target='#modalEdit' data-id='c".$id."' style='cursor: pointer;' class='edit'>Ubah</a></td>
                                              <td><a data-toggle='modal' data-target='#myModal' data-id='c".$id."' style='color: red;cursor: pointer;' class='hapus'>Hapus</a></td>
                                            </tr>
                                            ";
                                          }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="white-box col-lg-6 col-md-6 col-sm-12"  style="min-height: 900px">
                            <form class="form-horizontal form-material" style="margin-bottom: 50px" method="post" action="manage-master.php">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="text" style="width: 75%" placeholder="Ukuran Baru" class="form-control form-control-line" name="size" required="yes"> 
                                        <button class="btn btn-success pull-right" style="margin-top: -35px" type="submit" name="newsize">Tambah</button>
                                    </div>
                                </div>
                            </form>
                                <h3>Daftar Ukuran</h3>
                            <div class="table-responsive">
                                <table class="table-striped table">
                                    <thead>
                                        <tr>
                                            <th>Ukuran</th>
                                            <th>Edit</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $list = mysqli_query($conn, "SELECT * FROM mi_size WHERE size_active = 'Y'");

                                        while ($row = mysqli_fetch_assoc($list)) 
                                          {
                                            $id = $row['size_id'];
                                            $name = $row['size_name'];
                                            
                                            echo "
                                            <tr>
                                              <td>".$name."</td>
                                              <td><a data-toggle='modal' data-target='#modalEdit' data-id='s".$id."' style='cursor: pointer;' class='edit'>Ubah</a></td>
                                              <td><a data-toggle='modal' data-target='#myModal' data-id='s".$id."' style='color: red;cursor: pointer;' class='hapus'>Hapus</a></td>
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
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <form method="post" action="manage-master.php">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Hapus Master</h4>
      </div>
      <div class="modal-body">
        <p>Apakah Anda yakin ingin menghapus master ini?</p>
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
<!-- Modal -->
<div id="modalEdit" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <form class="form-horizontal form-material" method="post" action="manage-master.php">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Master</h4>
      </div>
      <div class="modal-body">
        <input type="hidden" id="idku" name="idku">
        <input class="form-control form-control-line" name="name" placeholder="Masukkan Nama Baru">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-success" type="submit" name="edit">Edit</button>
      </div>
    </div>
    </form>
  </div>
</div>
<?php include 'templates/scripts.html' ?>
<script type="text/javascript">
    $(document).ready(function() {
        $('.table').DataTable();
        $('.input-sm').height('20px');
    });
    $(document).on("click", ".hapus", function () {
        var idku = $(this).data('id');
        $(".modal-body #idku").val(idku);
    });
    $(document).on("click", ".edit", function () {
        var idku = $(this).data('id');
        $(".modal-body #idku").val(idku);
    });
</script>
<?php
    if(isset($_POST['hapus'])) {
        $idku = $_POST['idku'];

        if(substr($idku, 0,1) == 'c'){
            $sql = "UPDATE mi_color SET color_active='N' WHERE color_id='".substr($idku, 1)."'";
        } else {
            $sql = "UPDATE mi_size SET size_active='N' WHERE size_id='".substr($idku, 1)."'";
        }

        if(mysqli_query($conn, $sql)){
            header("location: manage-master.php");
        } else {
            echo "<script>alert('Gagal menghapus master, refresh halaman dan coba lagi');</script>";
        }
    }
    if(isset($_POST['edit'])) {
        $idku = $_POST['idku'];
        $nama = $_POST['name'];

        if(substr($idku, 0,1) == 'c'){
            $sql = "UPDATE mi_color SET color_name='$nama' WHERE color_id='".substr($idku, 1)."'";
        } else {
            $sql = "UPDATE mi_size SET size_name='$nama' WHERE size_id='".substr($idku, 1)."'";
        }

        if(mysqli_query($conn, $sql)){
            header("location: manage-master.php");
        } else {
            echo "<script>alert('Gagal mengedit master, refresh halaman dan coba lagi');</script>";
        }
    }
    if(isset($_POST['newcolor'])) {
        $color = $_POST['color'];
        $sql = "INSERT INTO mi_color (color_name) VALUES ('$color')";

        if(mysqli_query($conn, $sql)){
            header("location: manage-master.php");
        } else {
            echo "<script>alert('Gagal menambah master, refresh halaman dan coba lagi');</script>";
        }
    }
    if(isset($_POST['newsize'])) {
        $size = $_POST['size'];
        $sql = "INSERT INTO mi_size (size_name) VALUES ('$size')";

        if(mysqli_query($conn, $sql)){
            header("location: manage-master.php");
        } else {
            echo "<script>alert('Gagal menambah master, refresh halaman dan coba lagi');</script>";
        }
    }
?>
</html>
