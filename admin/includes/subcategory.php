<?php 
    require("connect.php");
	$filter = mysql_real_escape_string( $_POST['filter'] );

    $get = mysqli_query($conn, "SELECT * FROM mi_subcategory WHERE category_id = $filter");
	$option = '';

	while($row = mysqli_fetch_assoc($get))
	{
	  $option .= '<option class="subchange" value="'.$row['subcategory_id'].'">'.$row['subcategory_name'].'</option>';
	}

	echo $option;
	$option = '';

    mysql_close();
?>