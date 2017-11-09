<?php
//jika session username belum dibuat, atau session username kosong
if (!isset($_SESSION['username']) || empty($_SESSION['username'])){
    //tidak ngaruh apa2 cuma nanti di headernya beda
    /*$bytes = openssl_random_pseudo_bytes($i, $cstrong);
    $hex   = bin2hex($bytes);*/
}
?>