<?php
    require('dbconnect.php');
    require('lib.php');
    $sql = "INSERT INTO `hoc_sinh`(`ten_hs`,`lop`,`chieu_cao`,`do_can`) 
            VALUE ('".$_POST['ten_hs']."','".$_POST['lop']."','".$_POST['chieu_cao']."','".$_POST['do_can']."')";
?>