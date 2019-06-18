<?php
	require('dbconnect.php');
	require('lib.php');
	$data=$_POST;
	if(isset($_POST['delete'])){
		if(empty($data['ten_hs_xoa'])||!is_string($data['ten_hs_xoa'])){
			alter("Tên không hợp lệ !");
			index();
		}
		else{
			mysqli_select_db($db_connect,"giaithuat1");
			$sqli="SELECT * FROM hoc_sinh WHERE ten_hs='" .$data['ten_hs_xoa']."'";
			// duyệt qua xem có tên nhập vào trong ds k
			$result=mysqli_query($db_connect,$sqli);
			$result_arr=[];
			while($ten=mysqli_fetch_assoc($result)){
				$result_arr[]=$ten;
			}
			if(sizeof($result_arr)==0){
				alter("Không có tên học sinh bạn vừa nhập trong danh sách !");
				index();
			}
			else{
				$q = "DELETE FROM `hoc_sinh` WHERE ten_hs = '".$data['ten_hs_xoa']."'";
				$result = mysqli_query($db_connect,$q);
				mysqli_close($db_connect);
				alter("Đã xóa thành công !");
				index();
			}
		}
	}
?>