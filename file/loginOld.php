<?php
    session_start();
    include '../conn/dbOFF.php';
?>
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
    <title>nhinguyen.rf.gd - Đăng nhập để sử dụng</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        body{
            background-image: url("../img/bg3.png");
            background-size: cover;
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
        <a href="../index.php   ">Trang chủ</a><p id="nav-current"> > Đăng nhập <i class="fas fa-street-view" style="color: greenyellow;"></i><p>
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
        #logged{
            color: #FFFFFF;
            background: #232323;
            text-shadow: 0 0 5px #FFF, 0 0 10px #FFF, 0 0 15px #FFF, 0 0 20px #49ff18, 0 0 30px #49FF18, 0 0 40px #49FF18, 0 0 55px #49FF18, 0 0 75px #49ff18;
        }
        #user button{
            margin: 0 40px;
        }
        #user input{
            display: none;
        }
    </style>
    <div id="user">
        <i class="fas fa-user">
            <br>
            <?php
                if(isset($_SESSION['email']))
                    echo "<p id='logged'>(đã đăng nhập)</p>
                        <form action='../ctrl/letLogout.php' method='post'>
                            <input type='text' name='dirname' value='../file/login.php'>
                            <button class='btn btn-warning btn-xs' name='logout'>đăng xuất</button>
                        </form>
                        ";
                else
                    echo "<p>(chưa đăng nhập)</p>";
            ?>
        </i>
    </div> 
    <!-- form Login-->
    <style>
        #form{
            padding: 10px;
        }
        #form input{
            width: 100%;
            border-radius: 15px;
            padding: 4px;
            outline: none;
        }
        input:focus{
            box-shadow: rgba(240, 46, 170, 0.4) 5px 5px, rgba(240, 46, 170, 0.3) 10px 10px, rgba(240, 46, 170, 0.2) 15px 15px, rgba(240, 46, 170, 0.1) 20px 20px, rgba(240, 46, 170, 0.05) 25px 25px;
            color: purple;
        }
        #form button{
            border-radius: 15px;
            padding: 2px;
        }
    </style>
    <div class="row" id="form">
        <form action="" method="post">
            <img src="https://images.cooltext.com/5573750.png" width="354" height="76" alt="Đăng nhập thành viên" /><br>
            <input type="text" name="email" placeholder="Nhập email hoặc tên đăng nhập" required><br>
            <input type="password" name="password" placeholder="Nhập mật khẩu" required><br>
            <button name="login">Đăng nhập</button>
            <a href="" role="button" data-toggle="modal" data-target="#forgotPassword">Quên mật khẩu?</a>
            <?php include '../ctrl/letLogin.php'; ?>
        </form>
    </div>
    <!-- forget Password-->
    <!-- The Modal -->
    <style>
        .modal-dialog{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: auto;
            margin: -3% auto;
        }
        .modal-title{
            font-weight: 900;
        }
        #f_email{
            outline: none;
            border-radius: 10px;
            padding: 7px;
        }
    </style>
    <form method="post">
    <div class="modal" id="forgotPassword">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Chúng tôi sẽ gửi đường dẫn đến địa chỉ email bên dưới:</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                    <div class="modal-body">
                        <input type="text" name="f_email" id="f_email" placeholder="Nhập email của bạn" required>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button class="btn btn-success btn-lg" name="f_getOTP">Lấy lại mật khẩu</button>
                    </div>
                    <?php include '../ctrl/forgotPassword.php'; ?>
            </div>
        </div>
    </div>
    </form>
</div>
</body>
</html>
<?php
    $dbOFF -> close();
?>