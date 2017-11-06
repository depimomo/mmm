<?php
	require 'includes/connect.php';
	require 'includes/logged-in.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'templates/header.html' ?>
    <title>Millenia Admin | Atur Member</title>
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
                        <h4 class="page-title">Atur Member</h4>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Beranda</a></li>
                            <li class="active">Atur Member</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <h3>Daftar Member</h3>
                            <div class="table-responsive">
                                <table id="tbl" class="table-striped table">
                                    <thead>
                                        <tr>
                                            <th>Email</th>
                                            <th>Nama Lengkap</th>
                                            <th>Telpon</th>
                                            <th>Aktif</th>
                                            <th>Poin</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $list = mysqli_query($conn, "SELECT * FROM mi_member");

                                        while ($row = mysqli_fetch_assoc($list)) 
                                          {
                                            $id = $row['member_id'];
                                            $email = $row['member_email'];
                                            $fullname = $row['member_fullname'];
                                            $phone = $row['member_phone'];
                                            $active = $row['member_active'];
                                            $point = $row['member_point'];
                                            
                                            echo "
                                            <tr>
                                              <td>".$email."</td>
                                              <td>".$fullname."</td>
                                              <td>".$phone."</td>
                                              <td>".$active."</td>
                                              <td>".$point."<a data-toggle='modal' data-target='#modalEdit' data-id='".$id."' style='cursor: pointer;' class='edit'>&nbsp&nbsp<i class='fa fa-plus-circle'></a></td>
                                              <td><a href='edit-member.php?id=".$id."'>Ubah</a></td>
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
<div id="modalEdit" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <form class="form-horizontal form-material" method="post" action="member.php">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah poin</h4>
      </div>
      <div class="modal-body">
        <input type="hidden" id="idku" name="idku">
        <input type="number" class="form-control form-control-line" name="poin" placeholder="Masukkan tambahan poin">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-success" type="submit" name="edit">Tambah</button>
      </div>
    </div>
    </form>
  </div>
</div>
<?php include 'templates/scripts.html' ?>
<script type="text/javascript">
    $(document).ready(function() {
        $('#tbl').DataTable();
        $('.input-sm').height('20px');
    });
    $(document).on("click", ".edit", function () {
        var idku = $(this).data('id');
        $(".modal-body #idku").val(idku);
    });
</script>
<?php
    if(isset($_POST['edit'])) {
        $idku = $_POST['idku'];
        $poin = $_POST['poin'];

        $sql = "UPDATE mi_member SET member_point = member_point + $poin WHERE member_id='$idku'";
       
        if(mysqli_query($conn, $sql)){
            header("location: member.php");
        } else {
            echo "<script>alert('Gagal menambah poin, refresh halaman dan coba lagi');</script>";
        }
    }
?>
</html>
