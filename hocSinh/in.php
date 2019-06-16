<?php
    require('dbconnect.php');
    require('lib.php');
    mysqli_select_db($db_connect,"hocsinh");
    $sql = "SELECT * FROM hoc_sinh";
    $result = mysqli_query($db_connect,$sql);
    while ($row=mysqli_fetch_assoc($result)) {
    $data[] = $row;
    }
    $html = '';
    foreach ($data as $value) {
    $html .= '
    <tr role="row">
         <br>
        <td>'.$value['id'].'</td>
        <td>'.$value['ten_hs'].'</td>
        <td>'.$value['lop'].'</td>
        <td>'.$value['chieu_cao'].'</td>
        <td>'.$value['do_can'].'</td>
        <td><a href="edit.php?id='.$value['id'].'">Edit</a></td>
        <td><a href="delete.php?id='.$value['id'].'"> Delete</a></td>
    </tr>';
}
   echo $html;
?>