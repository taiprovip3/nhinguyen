<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>nhinguyen.rf.gd - Đăng ký tài khoản</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            background-image: url("../img/bg2.png");
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <!-- nav -->
        <style>
            #nav{
                color: white;
            }
            #nav > a{
                text-decoration: underline;
                color: white;
            }
            #nav > a:hover{
                font-weight: 900;
            }
            #nav-current{
                display: inline;
            }
        </style>
        <div id="nav">
            <a href="../index.php   ">Trang chủ</a><p id="nav-current"> > Đăng ký <i class="fas fa-street-view" style="color: greenyellow;"></i><p>
        </div>
        <!-- head -->
        <style>
            #head{
                text-align: center;
            }
        </style>
        <br>
        <div id="head">
            <img src="../img/title.png" width="643" height="126" alt="Đăng ký tài khoản" />
        </div>
        <!-- formReg -->
        <style>
            #formReg{
                height: 100%;
                width: 100%;
                display: table;
                padding: 30px;
            }
            #form{
                width: 50%;
                margin: auto;
            }
            #form input{
                width: 100%;
                margin: 5px;
            }
            #form a{
                text-decoration: none;
                color: white;
            }
        </style>
        <div id="formReg">
            <div id="form">
            <form action="" method="post">
                <input type="text" name="email" id="email" placeholder="Vui lòng nhập email (bắt buộc)" class="form-control">
                <input type="password" name="password" id="password" placeholder="Nhập mật khẩu" class="form-control">
                <input type="password" name="repassword" id="repassword" placeholder="Nhập lại mật khẩu" class="form-control">
                <button name="register" id="register" class="btn btn-success">Đăng ký</button>&emsp;
                <a href="./login.php">Đã có tài khoản? <u style="color: blue;">Đăng nhập ngay</u></a>
                <?php include '../ctrl/letRegister.php'; ?>
            </form>
            </div>
        </div>
    <!-- fixed user -->
    <style>
        #user{
            border: 1px solid grey;
            padding: 20px 0;
            position: fixed;
            right: 0;
            top: 55px;
            margin: 10px 10px;
            font-size: 99%;
            text-align: center;
            color: white;
            border-radius: 20px;
        }
        #user:hover{
            cursor: pointer;
            opacity: 0.5;
            background: grey;
            
        }
    </style>
    <div id="user">
        <i class="fas fa-user">
            <br>
            <p>(chưa đăng nhập)</p>
        </i>
    </div>
    <!-- wrong -->
    <style>
        #wrong{
            opacity: 0.8;
            background: lightgray;
            width: auto;
            height: auto;
            position: fixed;
            bottom: 0;
            right: 0;
            margin: 10px;
            padding: 5px;
            font-weight: bold;
            color: red;
            border-radius: 30px;
        }
        #wrong h4{
            text-align: center;
            color: red;
            font-weight: bold;
            text-decoration: underline;
        }
    </style>
    <div id="wrong">
        <div id="wrong-content">
            <i>- Quá trình đăng ký có thể mất ~ 30s. Mong bạn thông cảm!</i><br>
            <i>- Kiểm tra danh mục "Quảng Cáo" trong hộp gmail nếu ko thấy</i>
        </div>
    </div>
    </div>
</body>
</html>