<?php
	ob_start();
    $server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "millenia";

	//masukin credentials buat konek
    $conn = mysqli_connect($server, $db_user, $db_pass) or die("Could not connect to server!");
    mysqli_select_db($conn, $db_name) or die("Could not connect to database!");
    session_start();
?>