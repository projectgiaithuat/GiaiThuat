<?php
	require('dbconnect.php');
	$id = $_GET['id'];
	mysqli_select_db($db_connect,"hocsinh");
	$sql = "DELETE FROM `hoc_sinh` WHERE `id` = '".$id."'";
	$result = mysqli_query($db_connect,$sql);
	if($result){
		echo "Xóa thành công";
	}
	else{
		echo "Xóa không thành công";
	}
?>