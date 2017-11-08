<?php
//jika session username belum dibuat, atau session username kosong
if (!isset($_SESSION['username']) || empty($_SESSION['username'])){
    //redirect ke halaman login
    header('location:login.php');
    /*$bytes = openssl_random_pseudo_bytes($i, $cstrong);
    $hex   = bin2hex($bytes);*/
}
?>