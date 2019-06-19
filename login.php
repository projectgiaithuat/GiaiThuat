<?php
require("dbconnect.php");
require("lib.php");
$data=$_POST;
if (isset($data['username']) && isset($data['password1'])) {
    // kiểm tra kí tự đặc biệt
    if(check_special($data['username'])) alter("Username không được chứa kí tự đặc biệt");
    if(check_special($data['password1'])) alter("Password không được chúa kí tự đặc biệt");
    // $username = $data['username'];
    // $password = $data['password'];

    // kiểm tra tài khoản tồn tại trong hệ thống
    mysqli_select_db($db_connect,"giaithuat1");
    $sql = "SELECT * FROM `giao_vien` WHERE `user_name`='".$data['username']."' AND `password`='".MD5($data['password1'])."'";
    $result = mysqli_query($db_connect, $sql);
    $user_array = [];
    while($user = mysqli_fetch_assoc($result)) {
        $user_array[] = $user;
    }
    
    // nếu tài khoản không tổn tài hoặc không chính xác
    if(sizeof($user_array)==0) 
    {
        alter("Tài khoản hoặc mật khẩu không chính xác.");
        // login();
    }
    else{
        index();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="boostrap4-3-1/css/bootstrap.css">
    <link rel="text/javascript" href="jquery-3.4.1.js">
    <link rel="stylesheet" href="fileCss.css">
    <link rel="stylesheet" href="1.css">
    <script src="jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="dialog.css" />
    <script type="text/javascript" src="ajax.googleapis.com-ajax-libs-jquery-1.10.2-jquery.min.js"></script>
	<script type="text/javascript" src="dialog.js"></script>
    <title>Đăng nhập</title>
</head>

<body>
    <header>
        <nav id="bar" style="position:static">
            <img src="images\logoPrj.png" alt="LogoKit" height="50" width="50" style="float: left;" />
            <ul>
                <li id="height"><a class="link" href="#header"> </a></li>
                <li id="height"><a class="link" href="#header"> </a></li>
                <li id="height"><a class="link" href="#header"> </a></li>
                <li id="height"><a class="link" href="#header"> </a></li>
                <li id="height"><a class="link" href="#header"> Đôi </a></li>
                <li id="height"><a class="link" href="#about"> Bạn </a></li>
                <li id="height"><a class="link" href="#feature"> Cùng</a></li>
                <li id="height"><a class="link" href="#feature"> Tiến</a></li>
                <li id="height"><a class="link" href="#header"> </a></li>
            </ul>
        </nav>
    </header>
    <!-- end header -->
    <div class="content">
        <div class="form" class="center-container" style="margin: 14%">
            <div class="input">
                <form method="POST" action="login.php" role="form" enctype="multipart/form-data">
                    <h3><Label>Đăng nhập </Label></h3>
                    <div class="form-group">
                        <input type="text" class="form-control" id="username" name="username" 
                            placeholder="Tài khoản">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password1" placeholder="Mật khẩu">
                    </div>
                    <a href="#" style="color:black">Quên mật khẩu ?</a><br>
                    <button type="submit" class="btn " name="login">Đăng Nhập</button>
                </form>
            </div>
        </div>
    </div>
    <!-- end content -->
    <!-- end body -->
    <footer>
        <div class="footer">
            <p>Copyright &copy; 2019 HHD </p>
        </div>
    </footer>
    <!-- end footer -->
</body>


</html>