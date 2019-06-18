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
	<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
	<script type="text/javascript" src="ajax.googleapis.com-ajax-libs-jquery-1.10.2-jquery.min.js"></script>
	<script type="text/javascript" src="dialog.js"></script>
    <title>Trang chủ</title>
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
        <div id="box-container">
            <div id="box-1" style="overflow:auto;">
                <!-- dialog thêm hs -->
                <a href="#login-box" class="login-window button">Thêm HS</a>
                <div id="login-box" class="login">
                    <p class="login_title"> Thêm Học Sinh</p>
                    <a href="index.php" class="close"><img src="close.png" class="img-close" title="Close Window"
                            alt="Close" /></a>
                    <form method="POST" class="login-content" action="add.php">
                        <label class="username">
                            <span>Họ</span>
                            <input id="ho_hs" name="ho_hs" value="" type="text" autocomplete="on"
                                placeholder="Họ học sinh">
                        </label>
                        <label class="username">
                            <span>Tên</span>
                            <input id="ten_hs" name="ten_hs" value="" type="text" autocomplete="on"
                                placeholder="Tên học sinh">
                        </label>
                        <label class="username">
                            <span>Điểm</span>
                            <input id="diem" name="diem" value="" type="text" autocomplete="on"
                                placeholder="Điểm">
                        </label>
                        <label class="username">
                            <span>Lớp</span>
                            <input id="lop" name="lop" value="" type="text" placeholder="Lớp">
                        </label>
                        <button class="button submit-button" type="submit" name="add">Lưu</button>
                        
                    </form>
                </div>
                <!-- dialog sửa học sinh -->
                <a href="#edit-box" class="edit-window button">Sửa HS</a>
                <div id="edit-box" class="login">
                    <p class="login_title">Chỉnh sửa thông tin học sinh</p>
                    <a href="index.php" class="close"><img src="close.png" class="img-close" title="Close Window"
                            alt="Close" /></a>
                    <form method="POST" class="login-content" action="edit.php">
                        <label class="username">
                            <span>Tên học sinh cần sửa</span>
                            <input id="ten_hs_sua" name="ten_hs_sua" value="" type="text" autocomplete="on"
                                placeholder="Tên học sinh cần sửa">
                                <span style="color:red">Thay thế thông tin trước đó</span>
                        <label class="username">
                            <span>Họ</span>
                            <input id="ho_hs_edit" name="ho_hs_edit" value="" type="text" autocomplete="on"
                                placeholder="Họ học sinh">
                        </label>
                        <label class="username">
                            <span>Tên</span>
                            <input id="ten_hs_edit" name="ten_hs_edit" value="" type="text" autocomplete="on"
                                placeholder="Tên học sinh">
                        </label>
                        <label class="username">
                            <span>Điểm</span>
                            <input id="diem_edit" name="diem_edit" value="" type="text" autocomplete="on"
                                placeholder="Điểm">
                        </label>
                        <label class="username">
                            <span>Lớp</span>
                            <input id="lop_edit" name="lop_edit" value="" type="text" placeholder="Lớp">
                        </label>
                        <button class="button submit-button" type="submit" name="edit">Sửa</button>
                        
                    </form>
                </div>
                <!-- dialog xóa hs -->
                <a href="#delete-box" class="delete-window button">Xóa HS</a>
                <div id="delete-box" class="login">
                    <p class="login_title">"Xóa" học sinh</p>
                    <a href="#" class="close"><img src="close.png" class="img-close" title="Close Window"
                            alt="Close" /></a>
                    <form method="POST" class="login-content" action="delete.php">
                        <label class="username">
                            <span>Tên học sinh cần xóa</span>
                            <input id="ten_hs_xoa" name="ten_hs_xoa" value="" type="text" autocomplete="on"
                                placeholder="Tên học sinh cần xóa">
                        
                        <button class="button submit-button" type="submit" name="delete">Xóa</button>
                        
                    </form>
                </div>
                <!-- lấy data cho tb -->
                <?php
                require("dbconnect.php");
                $link = mysqli_connect('localhost', 'root', '', 'giaithuat1');
                mysqli_set_charset($link, "utf8");
                $q="SELECT ho_hs,ten_hs,diem,lop FROM `hoc_sinh` ORDER BY ten_hs";
                $result=mysqli_query($link,$q);
                if(!$result) {
                    die('Query error: [' . $db_connect->error . ']');
                }
                ?>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Họ</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Điểm</th>
                            <th scope="col">Lớp</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $stt=1?>
                        <?php while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) :?>
                        <tr>
                            <th scope="row"><?php echo $stt ?></th> <?php $stt++ ?>
                            <th><?php echo $row['ho_hs']  ?> </th>
                            <th><?php echo $row['ten_hs']  ?> </th>
                            <th><?php echo $row['diem']?> </th>
                            <th><?php echo $row['lop']  ?> </th>
                        </tr>
                        <?php endwhile ; ?>
                    </tbody>
                </table>
            </div>
            <div id="box-2" style=" z-index:1">
                <img src="soLop.png" alt="sơ đồ lớp học" style="position:static">
                <div class="innn">
                    <h4>huy---  hùng&emsp;&emsp; cao---akdjf------adfa---fasd</h4><br>
                    <h4>dungá</h4><br>
                    <h4>sakfjs  aksdf</h4><br>
                    <h4>akdf  ádfj</h4><br>
                    <h4> akdjf ádf </h4><br>
                    <h4>aksjf faksf</h4><br>
                </div>
            </div>
        </div>
    </div>
    <!-- end content -->
    <footer>
        <div class="footer">
            <p>Copyright &copy; 2019 HHD </p>
        </div>
    </footer>
    <!-- end footer -->
</body>

</html>