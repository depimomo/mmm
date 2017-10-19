<?php
	require 'includes/connect.php';
	require 'includes/logged-in.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'templates/header.html' ?>
    <title>Millenia Admin | Atur Akun</title>
    <!-- Data Table -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
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
                        <h4 class="page-title">Atur Akun</h4>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Beranda</a></li>
                            <li class="active">Atur Akun</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <h3>Daftar Akun Admin dan Sales
                                <a href="add-account.php"><button class="pull-right btn btn-success">Tambah</button></a></h3>
                            <div class="table-responsive">
                                <table id="tbl" class="table-striped table">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Nama Lengkap</th>
                                            <th>Role</th>
                                            <th>Aktif</th>
                                            <th>Ubah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $list = mysqli_query($conn, "SELECT * FROM mi_admin");

                                        while ($row = mysqli_fetch_assoc($list)) 
                                          {
                                            $user_level = $row['user_level'];
                                            $user_active = $row['user_active'];
                                            $user_fullname = $row['user_fullname'];
                                            $username = $row['username'];
                                            
                                            echo "
                                            <tr>
                                              <td>".$username."</td>
                                              <td>".$user_fullname."</td>
                                              <td>".$user_level."</td>
                                              <td>".$user_active."</td>
                                              <td><a href='edit-account.php?uname=".$username."'>Ubah</a></td>
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

<?php include 'templates/scripts.html' ?>

<!-- DATA TABLES -->
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#tbl').DataTable();
    } );
</script>
<?php

       
    ?>
</html>
