<?php
	require 'includes/connect.php';
	require 'includes/logged-in.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'templates/header.html' ?>
    <title>Millenia Admin | Edit Akun</title>
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
                        <h4 class="page-title">Edit Akun</h4>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Beranda</a></li>
                            <li><a href="account.php">Atur Akun</a></li>
                            <li class="active">Edit Akun</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <?php
                    $uname_edit = $_GET['uname'];
                    $list = mysqli_query($conn, "SELECT * FROM mi_admin WHERE username = '$uname_edit'");

                    while ($row = mysqli_fetch_assoc($list)) 
                      {
                        $user_level_edit = $row['user_level'];
                        $user_active_edit = $row['user_active'];
                        $user_fullname_edit = $row['user_fullname'];
                      }
                ?>
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="white-box">
                            <div class="user-bg">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <div id="initial" class="text-center pull-left"></div>
                                        <h4 class="text-white" id="username"><?php echo $user_fullname_edit; ?></h4>
                                        <h5 class="text-white"><?php echo strtoupper($user_level_edit) ?></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material" method="post" action="edit-account.php?uname=<?php echo $uname_edit?>">
                                <div class="form-group">
                                    <label class="col-md-12">Username</label>
                                    <div class="col-md-12">
                                        <input type="text" disabled="yes" value="<?php echo($uname_edit)?>" class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Nama lengkap</label>
                                    <div class="col-md-12">
                                        <input type="text" disabled="yes" value="<?php echo($user_fullname_edit)?>" class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Aktif (Y/N)</label>
                                    <div class="col-md-12">
                                        <input type="text" value="<?php echo($user_active_edit)?>" class="form-control form-control-line" name="active" id="active"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Password Baru (kosongkan jika tidak berubah)</label>
                                    <div class="col-md-12">
                                        <input type="password" class="form-control form-control-line" name="pass1"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Ulangi Password Baru</label>
                                    <div class="col-md-12">
                                        <input type="password" class="form-control form-control-line" name="pass2"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" style="color: #e74c3c; display: none" id="message"></label>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success" type="submit" name="update">Perbarui</button>
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
        if(isset($_POST['update'])) {
            //cleanup the variables
            //prevent mysql injection
            $pass1 = mysql_real_escape_string($_POST['pass1']);
            $pass2 = mysql_real_escape_string($_POST['pass2']);
            $active = mysql_real_escape_string($_POST['active']);

            if ($active != "Y" && $active != "N") {
                $message = 'Status harus "Y" atau "N"';
            } else {
                if($pass1 == '' && $pass2 == '') {
                    $sql = "UPDATE mi_admin SET user_active='$active' WHERE username = '$uname_edit'";

                    if (mysqli_query($conn, $sql)) {
                        $message = "Berhasil memperbarui akun";
                    } else {
                        $message = "Gagal memperbarui, coba lagi";
                    }
                } elseif ($pass1 != $pass2) {
                    $message = 'Password tidak sesuai';
                } else {
                    $bytes = openssl_random_pseudo_bytes(50, $cstrong);
                    $salt = bin2hex($bytes);
                    $enc = password_hash($pass1.$salt, PASSWORD_DEFAULT);

                    $sql = "UPDATE mi_admin SET user_pass='$enc', user_crypt='$salt', user_active='$active' WHERE username = '$uname_edit'";
                    if (mysqli_query($conn, $sql)) {
                        $message = "Berhasil memperbarui akun";
                    } else {
                        $message = "Gagal memperbarui, coba lagi";
                    }
                }
            }
            
            echo
            "<script>".
                "$(document).ready(function(){".
                    "$('#message').html('".$message."');".
                    "$('#message').show();".
                    "$('#active').val('".$active."');".
                "});".
            "</script>";
        }
    ?>
</html>
