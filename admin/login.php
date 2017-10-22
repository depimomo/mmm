<?php
require 'includes/connect.php';
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Millenia Admin | Masuk</title>
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="css/style2.css">
</head>

<body>
  <form method="post" action="login.php">
    <div class="login-form">
      <h1>Millenia Admin</h1>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Username " name="uname">
        <i class="fa fa-user"></i>
      </div>
      <div class="form-group log-status">
        <input type="password" class="form-control" placeholder="Password" name="pass">
        <i class="fa fa-lock"></i>
      </div>
      <span class="alert" id="message"></span>
      <button type="submit" class="log-btn" name="masuk" >Masuk</button>
    </div>
  </form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  
  <?php

    $message = "";

    //check if the form has been submitted
    if(isset($_POST['masuk'])) {
      //cleanup the variables
      //prevent mysql injection
      $username = mysql_real_escape_string($_POST['uname']);
      $password = mysql_real_escape_string($_POST['pass']);
      
      $result = mysqli_query($conn, "SELECT * FROM mi_admin WHERE username = '$username'");
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count === 1) {
        while ($row = mysqli_fetch_assoc($result)) {
          $user_pass = $row['user_pass'];
          $user_crypt = $row['user_crypt'];
          $user_level = $row['user_level'];
          $user_active = $row['user_active'];
          $user_fullname = $row['user_fullname'];
        }

        if($user_active == 'N') {
          $message = "Akun telah dinonaktifkan";
        } else if(password_verify($password.$user_crypt,$user_pass)){
          $_SESSION['username'] = $username;
          $_SESSION['user_level'] = $user_level;
          $_SESSION['user_fullname'] = $user_fullname;
          
          header("location: index.php");
        } else {
          $message = "Password salah";
        }
      } else {
        $message = "Akun tidak terdaftar";
      }
      echo 
      "<script>".
        "$(document).ready(function(){".
          "$('#message').html('".$message."');".
          "$('.log-status').addClass('wrong-entry');".
          "$('.alert').fadeIn(500);".
          "setTimeout(`$('.alert').fadeOut(1500);`,3000 );".
          "$('.form-control').keypress(function(){".
            "$('.log-status').removeClass('wrong-entry');".
          "});".
        "});".
      "</script>";
    }
  ?>
</body>
</html>
