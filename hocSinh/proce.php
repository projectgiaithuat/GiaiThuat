<?php
require('dbconnect.php');
require('lib.php');
$data = $_POST;
if (isset($_GET['id'])) {
    $sql = " UPDATE `hoc_sinh` SET `ten_hs`='".$data['ten_hs']."',`lop`='".$data['lop']."',`chieu_cao`='".$data['chieu_cao']."',`do_can`='".$data['do_can']."' WHERE `id` = ".$_GET['id'];
    $result = mysqli_query($db_connect,$sql);
    if($result){
        echo "Chỉnh sửa thông tin thành công";
    }
    else{
        echo "Chỉnh sửa thông tin không thành công";
    }
} else {
    if (isset($_POST['submit'])) {
        if (!isset($data['ten_hs']) || !is_string($data['ten_hs']) || strlen($data['ten_hs']) < 5 || strlen($data['ten_hs']) > 55) {
            die_custom("Tên học sinh không hợp lệ");
        }
        if (!isset($data['lop']) || !is_string($data['lop']) || strlen($data['lop']) < 0 || strlen($data['lop']) > 10) {
            die_custom("Lớp không hợp lệ");
        }
        if (!isset($data['chieu_cao']) || !is_numeric($data['chieu_cao']) || $data['chieu_cao'] < 0) {
            die_custom("Chiều cao không hợp lệ");
        }
        if (!isset($data['do_can']) || !is_numeric($data['do_can']) || $data['do_can'] < 0 || $data['do_can']) {
            die_custom("Độ cận không hợp lệ");
        }
    } else {
        $sql = "INSERT INTO `hoc_sinh`(`ten_hs`,`lop`,`chieu_cao`,`do_can`) 
        VALUES ('" . $data['ten_hs'] . "','" . $data['lop'] . "','" . $data['chieu_cao'] . "','" . $data['do_can'] . "') ";
        mysqli_select_db($db_connect, "hocsinh");
        $query = mysqli_query($db_connect, $sql);
        //$result = mysqli_fetch_row($query);
        //print_r($result);
        echo "Đã thêm";
    }
}
?>