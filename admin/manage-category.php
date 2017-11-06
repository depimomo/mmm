<?php
	require 'includes/connect.php';
	require 'includes/logged-in.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'templates/header.html' ?>
    <title>Millenia Admin | Atur Kategori</title>
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
                        <h4 class="page-title">Atur Kategori</h4>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Beranda</a></li>
                            <li class="active">Atur Kategori</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box col-lg-4 col-md-4 col-sm-12"  style="min-height: 4200px">
                            <form class="form-horizontal form-material" style="margin-bottom: 150px" method="post" action="manage-category.php">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="text" style="width: 75%" placeholder="Kategori Baru" class="form-control form-control-line" name="category" required="yes"> 
                                        <button class="btn btn-success pull-right" style="margin-top: -35px" type="submit" name="newcategory">Tambah</button>
                                    </div>
                                </div>
                            </form>
                                <h3>Daftar Kategori</h3>
                            <div class="table-responsive">
                                <table class="table-striped table">
                                    <thead>
                                        <tr>
                                            <th>Kategori</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $list = mysqli_query($conn, "SELECT * FROM mi_category");

                                        while ($row = mysqli_fetch_assoc($list)) 
                                          {
                                            $id = $row['category_id'];
                                            $name = $row['category_name'];
                                            
                                            echo "
                                            <tr>
                                              <td>".$name."</td>
                                              <td><a data-toggle='modal' data-target='#modalEdit' data-id='c".$id."' style='cursor: pointer;' class='edit'><i class='ti-pencil fa-fw'></i></a></td>
                                            </tr>
                                            ";
                                          }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="white-box col-lg-4 col-md-4 col-sm-12"  style="min-height: 4200px">
                            <form class="form-horizontal form-material" style="margin-bottom: 100px" method="post" action="manage-category.php">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <select name="category" class="form-control form-control-line">
                                            <?php
                                            $list = mysqli_query($conn, "SELECT * FROM mi_category");

                                            while ($row = mysqli_fetch_assoc($list)) 
                                              {
                                                $id = $row['category_id'];
                                                $name = $row['category_name'];
                                                
                                                echo "
                                                <option value='".$id."'>".$name."</option>
                                                ";
                                              }
                                            ?>
                                        </select>
                                        <input type="text" style="width: 75%" placeholder="Sub Kategori Baru" class="form-control form-control-line" name="subcategory" required="yes"> 
                                        <button class="btn btn-success pull-right" style="margin-top: -35px" type="submit" name="newsubcategory">Tambah</button>
                                    </div>
                                </div>
                            </form>
                                <h3>Daftar Sub Kategori</h3>
                            <div class="table-responsive">
                                <table class="table-striped table">
                                    <thead>
                                        <tr>
                                            <th>Kategori</th>
                                            <th>Sub Kategori</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $list = mysqli_query($conn, "SELECT * FROM mi_subcategory");

                                        while ($row = mysqli_fetch_assoc($list)) 
                                          {
                                            $parent = $row['category_id'];
                                            $id = $row['subcategory_id'];
                                            $name = $row['subcategory_name'];
                                            
                                            echo "
                                            <tr>
                                              <td>".$parent."</td>
                                              <td>".$name."</td>
                                              <td><a data-toggle='modal' data-target='#modalEdit' data-id='s".$id."' style='cursor: pointer;' class='edit'><i class='ti-pencil fa-fw'></i></a>
                                              <a data-toggle='modal' data-target='#myModal' data-id='s".$id."' style='color: red;cursor: pointer;' class='hapus'><i class='ti-trash fa-fw'></a></td>
                                            </tr>
                                            ";
                                          }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="white-box col-lg-4 col-md-4 col-sm-12"  style="min-height: 4200px">
                            <form class="form-horizontal form-material" style="margin-bottom: 50px" method="post" action="manage-category.php">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <select name="category" id="category" class="form-control form-control-line">
                                            <?php
                                            $list = mysqli_query($conn, "SELECT * FROM mi_category");

                                            while ($row = mysqli_fetch_assoc($list)) 
                                              {
                                                $id = $row['category_id'];
                                                $name = $row['category_name'];
                                                
                                                echo "
                                                <option value='".$id."'>".$name."</option>
                                                ";
                                              }
                                            ?>
                                        </select>
                                        <select name="subcategory" id="subcategory" class="form-control form-control-line">
                                            <option class="subchange">-Pilih Kategori Dulu-</option>
                                        </select>
                                        <input type="text" style="width: 75%" placeholder="Sub Sub Kategori Baru" class="form-control form-control-line" name="subsubcategory" required="yes"> 
                                        <button class="btn btn-success pull-right" style="margin-top: -35px" type="submit" name="newsubsubcategory">Tambah</button>
                                    </div>
                                </div>
                            </form>
                                <h3>Daftar Sub Sub Kategori</h3>
                            <div class="table-responsive">
                                <table class="table-striped table">
                                    <thead>
                                        <tr>
                                            <th>Sub Kategori</th>
                                            <th>Nama</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $list = mysqli_query($conn, "SELECT * FROM mi_subsubcategory");

                                        while ($row = mysqli_fetch_assoc($list)) 
                                          {
                                            $parent = $row['subcategory_id'];
                                            $id = $row['subsubcategory_id'];
                                            $name = $row['subsubcategory_name'];
                                            
                                            echo "
                                            <tr>
                                              <td>".$parent."</td>
                                              <td>".$name."</td>
                                              <td><a data-toggle='modal' data-target='#modalEdit' data-id='z".$id."' style='cursor: pointer;' class='edit'><i class='ti-pencil fa-fw'></i></a>
                                              <a data-toggle='modal' data-target='#myModal' data-id='z".$id."' style='color: red;cursor: pointer;' class='hapus'><i class='ti-trash fa-fw'></a></td>
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
    <form method="post" action="manage-category.php">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Hapus Master</h4>
      </div>
      <div class="modal-body">
        <p>Apakah Anda yakin ingin menghapus kategori ini? <br> PADA SUBCATEGORY, SELURUH SUBSUBCATEGOTY TERKAIT JUGA AKAN TERHAPUS, TINDAKAN TIDAK DAPAT DIBATALKAN.</p>
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
    <form class="form-horizontal form-material" method="post" action="manage-category.php">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Kategori</h4>
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

        $('.table').DataTable({
            "searching": false,
            "bPaginate": false,
            "bLengthChange": false,
            "bInfo": false
        });

        $('.input-sm').height('20px');

        $("#category").change(function(){
            var filter = $("#category").find("option:selected").val();
            $.post('includes/subcategory.php', {filter : filter}, function(data) {
                $(".subchange").remove();
                $("#subcategory").append(data);
            });
        });
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

        if(substr($idku, 0,1) == 's'){
            $sql = "DELETE FROM mi_subcategory WHERE subcategory_id='".substr($idku, 1)."'";
        } else {
            $sql = "DELETE FROM mi_subsubcategory WHERE subsubcategory_id='".substr($idku, 1)."'";
        }

        if(mysqli_query($conn, $sql)){
            header("location: manage-category.php");
        } else{
            echo "<script>alert('Gagal menghapus category, refresh halaman dan coba lagi');</script>";
        }
    }
    if(isset($_POST['newcategory'])) {
        $category = $_POST['category'];
        $sql = "INSERT INTO mi_category (category_name) VALUES ('$category')";

        if(mysqli_query($conn, $sql)){
            header("location: manage-category.php");
        } else {
            echo "<script>alert('Gagal menambah kategori, refresh halaman dan coba lagi');</script>";
        }
    }
    if(isset($_POST['newsubcategory'])) {
        $category = $_POST['category'];
        $subcategory = $_POST['subcategory'];
        $sql = "INSERT INTO mi_subcategory (category_id, subcategory_name) VALUES ('$category', '$subcategory')";

        if(mysqli_query($conn, $sql)){
            header("location: manage-category.php");
        } else {
            echo "<script>alert('Gagal menambah subcategory, refresh halaman dan coba lagi');</script>";
        }
    }
    if(isset($_POST['newsubsubcategory'])) {
        $subcategory = $_POST['subcategory'];
        $subsubcategory = $_POST['subsubcategory'];
        $sql = "INSERT INTO mi_subsubcategory (subcategory_id, subsubcategory_name) VALUES ('$subcategory', '$subsubcategory')";

        if(mysqli_query($conn, $sql)){
            header("location: manage-category.php");
        } else {
            echo "<script>alert('Gagal menambah subsubcategory, refresh halaman dan coba lagi');</script>";
        }
    }
    if(isset($_POST['edit'])) {
        $idku = $_POST['idku'];
        $nama = $_POST['name'];

        if(substr($idku, 0,1) == 'c'){
            $sql = "UPDATE mi_category SET category_name='$nama' WHERE category_id='".substr($idku, 1)."'";
        } elseif(substr($idku, 0,1) == 's') {
            $sql = "UPDATE mi_subcategory SET subcategory_name='$nama' WHERE subcategory_id='".substr($idku, 1)."'";
        } else {
            $sql = "UPDATE mi_subsubcategory SET subsubcategory_name='$nama' WHERE subsubcategory_id='".substr($idku, 1)."'";
        }

        if(mysqli_query($conn, $sql)){
            header("location: manage-category.php");
        } else {
            echo "<script>alert('Gagal mengedit kategori, refresh halaman dan coba lagi');</script>";
        }
    }
?>
</html>
