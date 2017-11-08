<?php 
    require("connect.php");
	$filter = mysql_real_escape_string( $_POST['filter'] );

    $get = mysqli_query($conn, "SELECT * FROM mi_subsubcategory WHERE subcategory_id = $filter");
	$option = '';

	while($row = mysqli_fetch_assoc($get)){
	  $option .= '<option class="subsubchange" value="'.$row['subsubcategory_id'].'">'.$row['subsubcategory_name'].'</option>';
	}

	echo $option;
	$option = '';

    mysql_close();
?>