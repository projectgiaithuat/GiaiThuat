<?php
require("dbconnect.php");
require("lib.php");
$data=$_POST;
if(isset($_POST['edit'])){
    if(empty($data['ten_hs_sua'])||!is_string($data['ten_hs_sua'])){
        alter("Tên không hợp lệ !");
        index();
    }
    else if (empty($data['ho_hs_edit'])||check_special($data["ho_hs_edit"])  || !is_string($data['ho_hs_edit'])) {
        alter("Họ học sinh không hợp lệ");
        index();
    }
    else if (empty($data['ten_hs_edit'])|| !is_string($data['ten_hs_edit']) || strlen($data['ten_hs_edit']) > 55) {
        alter("Tên học sinh không hợp lệ");
        index();
    }
    else if (empty($data['lop_edit'])||check_special($data["lop_edit"])  || !is_string($data['lop_edit']) || strlen($data['lop_edit']) > 10) {
        alter("Lớp không hợp lệ");
        index();
    }
    else if (!isset($data['diem_edit'])||check_special($data["diem_edit"])  || !is_numeric($data['diem_edit']) || $data['diem_edit'] < 0 || $data['diem_edit']>10 ) {
        alter("Điểm không hợp lệ");
        index();
    }
    else{
        
        mysqli_select_db($db_connect,"giaithuat1");
        $sqli="SELECT * FROM hoc_sinh WHERE ten_hs='" .$data['ten_hs_sua']."'";
        // duyệt qua xem có tên nhập vào trong ds k
        $result=mysqli_query($db_connect,$sqli);
        $result_arr=[];
        while($ten=mysqli_fetch_assoc($result)){
            $result_arr[]=$ten;
        }
        if(sizeof($result_arr)==0){
            alter("Không có tên học sinh bạn vừa nhập trong danh sách !");
            index();
        }else{
            $q="UPDATE hoc_sinh SET ho_hs='".$data['ho_hs_edit']."',ten_hs='".$data['ten_hs_edit']."',diem='".$data['diem_edit']."',lop='".$data['lop_edit']."' WHERE ten_hs='".$data['ten_hs_sua']."'";
            mysqli_select_db($db_connect,"giaithuat1");
            mysqli_query($db_connect,$q);
            mysqli_close($db_connect);
            alter("Sửa Thông tin học sinh thành công !");
            index();
        }
    }
}
else{
    alter("Lỗi cái gì đó rồi");
    index();
}
?>