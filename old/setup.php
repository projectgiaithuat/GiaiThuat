
<?php
	require('dbconnect.php');
	// connect database
	//$db_host = "localhost";
	//$db_user = "root";
	//$db_pass = "";
	//$db_connect = mysqli_connect($db_host, $db_user, $db_pass) or die ("error connect");
	// tạo cơ sở dữ liệu
	$db_name = "hocsinh";
	$db_query = "CREATE DATABASE IF NOT EXISTS ".$db_name." CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci';";
	mysqli_query($db_connect, $db_query) or die("create database error");
	mysqli_select_db($db_connect, $db_name) or die("select database error");
	// tạo bảng hoc sinh
	$db_table = "hoc_sinh";
	$db_query = "CREATE TABLE IF NOT EXISTS ".$db_table."(id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, ten_hs VARCHAR(255) NOT NULL UNIQUE, lop VARCHAR(15) NOT NULL, chieu_cao INT NOT NULL, do_can INT NOT NULL) ENGINE = InnoDB;";
	mysqli_query($db_connect, $db_query) or die("create table error1");
	//tạo bảng giao vien
	$db_table_2 = "giao_vien";
	$db_query= "CREATE TABLE IF NOT EXISTS ".$db_table_2."(id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, user_name VARCHAR(255) NOT NULL, lop VARCHAR(15) NOT NULL, password VARCHAR(255) NOT NULL) ENGINE = InnoDB;";
	mysqli_query($db_connect, $db_query) or die("create table error2");
	// tạo tk admin: tk admin mk admin
	$db_query = "INSERT INTO `giao_vien`(`user_name`, `password`)
			 VALUES('admin', MD5('admin'))";
	mysqli_query($db_connect, $db_query) or die("setup admin error");
	echo "setup successfully";
?>