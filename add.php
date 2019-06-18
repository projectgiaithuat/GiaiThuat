<?php
require('dbconnect.php');
require('lib.php');
$data = $_POST;
    if (isset($_POST['add'])) {
        if (empty($data['ho_hs'])||check_special($data["ho_hs"])  || !is_string($data['ho_hs'])) {
            alter("Họ học sinh không hợp lệ");
            index();
        }
        else if (empty($data['ten_hs'])|| !is_string($data['ten_hs']) || strlen($data['ten_hs']) > 55) {
            alter("Tên học sinh không hợp lệ");
            index();
        }
        else if (empty($data['lop'])||check_special($data["lop"])  || !is_string($data['lop']) || strlen($data['lop']) > 10) {
            alter("Lớp không hợp lệ");
            index();
        }
        else if (!isset($data['diem'])||check_special($data["diem"])  || !is_numeric($data['diem']) || $data['diem'] < 0 || $data['diem']>10 ) {
            alter("Điểm không hợp lệ");
            index();
        }
        else{
        $sql = "INSERT INTO `hoc_sinh`(`ho_hs`,`ten_hs`,`diem`,`lop`) 
        VALUES ('" . $data['ho_hs'] . "','" . $data['ten_hs'] . "','" . $data['diem'] . "','" . $data['lop'] . "') ";
        mysqli_select_db($db_connect, "giaithuat1");
        mysqli_query($db_connect, $sql);
        }
        mysqli_close($db_connect);
        alter("Thêm học sinh thành công!");
        index();
    } else {
        alter("lỗi cái gì đó rồi !");
        index();
    }
?>
