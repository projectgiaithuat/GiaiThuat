<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="boostrap4-3-1/css/bootstrap.css">
    <link rel="stylesheet" href="fileCss.css">
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
    <title>Đăng nhập</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a href="https://www.facebook.com/kitclubKMA/"><img class="imge" src="images\logoPrj.png" alt="LogoKit" style="width:140px" href="https://www.facebook.com/kitclubKMA/" class="img-fluid"></a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    
            <li class="nav-item active" class="nav-item"><a class="nav-link" href="#header">Lớp </a></li>
            <li class="nav-item active" class="nav-item"><a class="nav-link" href="#about">Nhập </a></li>
            <li class="nav-item active" class="nav-item"><a class="nav-link" href="#feature">Sắp xếp </a></li>
        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- end header -->
    <div class="content">
        <div class="form" class="center-container" >

            <div class="input" >
                <form action="">
                        <h3><Label>LOGIN QUICK </Label></h3>
                        <div class="form-group">
                            <!-- <label for="exampleInputEmail1">E-mail</label> -->
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <!-- <label for="exampleInputPassword1">Password</label> -->
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password">
                        </div>
                        <a href="#">Forgot Password ?</a><br>
                        <button type="submit" class="btn ">Login</button>
                </form>
            </div>
        </div>
    </div>
        <!-- end content -->
</body>
<!-- end body -->
<footer>
<div class="footer">
<p>HHD &copy; 2019</p>
</div>
</footer>
<!-- end footer -->
</html>