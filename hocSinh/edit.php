<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <style type="text/css">
            button{
                margin-right: 20px;
                padding: 5px;
            }
            form{
                width: 600px;
                margin: auto;
                text-align: center;
            }
            div.form-group{
                width: 90%;
                height: 24px;
                margin: 5px;
            }
            div.form-group input{
                float: right;
                height: 20px;
                width: 400px;
            }
            span{
                font: 18px bold;
                font-weight: bold;
                float: right;
                margin-right: 10px; 
            }
            h1{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <?php 
            require 'dbconnect.php';
            mysqli_select_db($db_connect,"hocsinh");
            $id = $_GET['id'];
            $sql="SELECT * FROM `hoc_sinh` WHERE `id`= ".$id;
            $result=mysqli_query($db_connect,$sql);
            while ($row=mysqli_fetch_assoc($result)) {
                $info = $row;
            }
        ?>
        <form action="proce.php" method="POST">
            <h1>Chỉnh sửa thông tin học sinh</h1>
            <div class="form-group">
                <input type="text" name="ten_hs" value="<?php echo $info['ten_hs'] ?>"><span>Tên học sinh: </span>
            </div>
            <div class="form-group">
                <input type="text" name="lop" value="<?php echo $info['lop'] ?>"><span>Lớp: </span>
            </div>
            <div class="form-group">
                <input type="text" name="chieu_cao" value="<?php echo $info['chieu_cao'] ?>"><span>Chiều cao: </span>
            </div>
            <div class="form-group">
                <input type="text" name="do_can" value="<?php echo $info['do_can'] ?>"><span>Độ cận: </span>
            <div class="form-group">
                <button type="submit">Cập nhật</button>
                <button type="reset">Reset</button>
                <a href="index.php"><button type="button">Cancle</button></a>
            </div>
        </form>
    </body>
</html>
