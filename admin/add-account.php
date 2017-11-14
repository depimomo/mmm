<?php
	require 'includes/connect.php';
	require 'includes/logged-in.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'templates/header.html' ?>
    <title>Millenia Admin | Tambah Akun</title>
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
                        <h4 class="page-title">Tambah Akun</h4>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Beranda</a></li>
                            <li><a href="account.php">Atur Akun</a></li>
                            <li class="active">Tambah Akun</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material" method="post" action="add-account.php">
                                <div class="form-group">
                                    <label class="col-md-12">Username (tanpa spasi)</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control form-control-line" name="uname" required="yes"> </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Nama lengkap</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control form-control-line" name="fullname" required="yes"> </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Role</label>
                                    <div class="col-md-12">
                                        <select name="role" class="form-control form-control-line" id="role" required="yes">
                                          <option value="sales">Sales</option>
                                          <option value="admin">Admin</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Password </label>
                                    <div class="col-md-12">
                                        <input type="password" class="form-control form-control-line" name="pass1" required="yes"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Ulangi Password </label>
                                    <div class="col-md-12">
                                        <input type="password" class="form-control form-control-line" name="pass2" required="yes"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" style="color: #e74c3c; display: none" id="message"></label>
                                </div>
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
<?php

        $message = '';

        //check if the form has been submitted
        if(isset($_POST['tambah'])) {
            //cleanup the variables
            //prevent mysql injection
            $uname = mysqli_real_escape_string($conn, $_POST['uname']);
            $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
            $pass1 = mysqli_real_escape_string($conn, $_POST['pass1']);
            $pass2 = mysqli_real_escape_string($conn, $_POST['pass2']);
            $role = mysqli_real_escape_string($conn, $_POST['role']);
            
            if ($pass1 != $pass2) {
                $message = 'Password tidak sesuai';
            } else {
                $bytes = openssl_random_pseudo_bytes(50, $cstrong);
                $salt = bin2hex($bytes);
                $enc = password_hash($pass1.$salt, PASSWORD_DEFAULT);

                $sql = "INSERT INTO mi_admin (username, user_pass, user_crypt, user_fullname, user_level) VALUES ('$uname','$enc','$salt','$fullname','$role') ";
                if (mysqli_query($conn, $sql)) {
                    header("location: account.php");
                } else {
                    $message = "Gagal menambah, coba lagi";
                }
            }
            
            echo
            "<script>".
                "$(document).ready(function(){".
                    "$('#message').html('".$message."');".
                    "$('#message').show();".
                "});".
            "</script>";
        }
    ?>
</html>
