
<?php
	$db_host = "localhost";
	$db_user = "root";
	$db_pass = "";
	$db_connect  = mysqli_connect($db_host,$db_user,$db_pass) or die("connect error");
	mysqli_query($db_connect,"SET NAMEs utf8");
?>