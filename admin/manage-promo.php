<?php
	require 'includes/connect.php';
	require 'includes/logged-in.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'templates/header.html' ?>
    <title>Millenia Admin | Atur Promo</title>
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
                        <h4 class="page-title">Atur Promo</h4>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Beranda</a></li>
                            <li class="active">Atur Promo</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <h3>Daftar Produk Dengan Promo
                                <a href="add-promo.php"><button class="btn btn-success pull-right">Tambah</button></a></h3>

                            <div style="margin-bottom: -35px;"><p style="display: inline;">Jenis Promo</p>
                            <select style="display: inline; width: 150px;" name="category" class="input-sm form-control" id="category" required="yes">
                                <option value="semua">Semua</option>
                                <option value="clearance">Clearance</option>
                                <option value="quantity">Quantity</option>
                                <option value="time">Time</option>
                                <option value="motm">MOTM</option>
                            </select></div>
                            <div class="table-responsive">
                                <table id="tbl" class="table-striped table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>Harga Promo</th>
                                            <th>Kategori</th>
                                            <th>Aktif</th>
                                            <th>Promo Aktif</th>
                                            <th>Ubah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>Harga Promo</th>
                                            <th>Kategori</th>
                                            <th>Aktif</th>
                                            <th>Promo Aktif</th>
                                            <th>Ubah</th>
                                        </tr>
                                        <?php
                                        // $list = mysqli_query($conn, "SELECT * FROM mi_admin");

                                        // while ($row = mysqli_fetch_assoc($list)) 
                                        //   {
                                        //     $user_level = $row['user_level'];
                                        //     $user_active = $row['user_active'];
                                        //     $user_fullname = $row['user_fullname'];
                                        //     $username = $row['username'];
                                            
                                        //     echo "
                                        //     <tr>
                                        //       <td>".$username."</td>
                                        //       <td>".$user_fullname."</td>
                                        //       <td>".$user_level."</td>
                                        //       <td>".$user_active."</td>
                                        //       <td><a href='edit-account.php?uname=".$username."'>Ubah</a></td>
                                        //     </tr>
                                        //     ";
                                        //   }
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
        $('#tbl').DataTable({"bLengthChange": false});
        $('.input-sm').height('20px');
    } );
</script>
<?php

       
    ?>
</html>
