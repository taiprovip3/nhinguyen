<?php
    session_start();
    include_once '../conn/dbON.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <title>nghinguyen.rf.gd | Login</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
            font-family: serif;
        }
        body{
            background-image: url("../img/bg2.png");
            background-size: cover;
        }
        input,button{
            outline: none;
            border: none;
            font-size: larger;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <!-- Navigation -->
        <style>
            #menu{
                display: flex;
                list-style: none;
                width: 100%;
            }
            #menu > li{
                position: relative;
                padding: 2px;
                font-size: larger;
                font-weight: 800;
                background: #24d16c;
                margin: 5px;
                width: 100%;
                text-align: center;
                border-radius: 10px;
            }
            #menu a{
                text-decoration: none;
                color: white;
            }

            #sub-menu{
                position: absolute;
                list-style: none;
                width: 100%;
            }
            #sub-menu a{
                text-decoration: none;
            }
            #sub-menu > li{
                background: #24d16c;
                display: none;
                position: relative;
                padding: 5px;
            }
            #sub-menu > li:hover{
                cursor: pointer;
                color: white;
                text-decoration: underline;
                text-shadow: 2px 2px 2px #38CE66;
                box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
            }
            #menu > li:hover > #sub-menu > li{
                display: block;
                border-radius: 10px;
            }
        </style>
        <div class="row" id="nav">
            <ul id="menu">
                <li>
                    <a href="../index.php">Trang chủ</a></i>
                </li>
                <li>
                    <a href="javascript:void(0)">Phúc lợi</a>
                    <ul id="sub-menu">
                        <li><a href="./muster.php">Điểm danh</a></li>
                        <li><a href="./giftcode.php">Nhập giftcode</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)">Cửa hàng</a>
                    <ul id="sub-menu">
                        <li><a href="./shopfile.php">Shop file</a></li>
                        <li><a href="./shopplugin.php">Shop plugin</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)">Tài khoản</a>
                    <ul id="sub-menu">
                        <li><a href="./register.php">Đăng ký</a></li>
                        <li><a href="javascript:void(0)">Đăng nhập</a> <i class="fas fa-street-view" style="color: greenyellow;"></i></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)">Danh mục khác</a>
                    <ul id="sub-menu">
                        <li><a href="./download.html">Tải xuống</a></li>
                        <li><a href="./help.html">Trợ giúp</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Content -->
        <style>
            #content{
                width: 99%;
                padding: 10px;
                position: absolute;
                top: 43%; left: 50%;
                transform: translateX(-50%) translateY(-50%);
            }
            #formbox{
                background: white;
                width: 50%;
                padding: 10px;
                position: absolute;
                top: 44%; left: 50%;
                transform: translateX(-50%) translateY(-50%);
            }
                #label{
                    background: #0a7d3a;
                    font-weight: 900;
                    font-size: xx-large;
                    color: whitesmoke;
                    padding: 10px;
                }
                #formcont input{
                    padding: 10px;
                    background: #e3e3e3;
                    width: 100%;
                    border-radius: 5px;
                    margin: 5px 0;
                }
                #formcont button{
                    padding: 8px;
                    width: 24%;
                    background: #13bd5c;
                    color: #38383b;
                }
                ::placeholder{
                    text-align: center;
                }
                #wrongsomethings{
                    display: none;
                }
        </style>
        <div class="row" id="content">
            <div class="jumpotron text-center" id="formbox">
                <div id="label">Đăng nhập</div>
                <div id="formcont">
                    <form method="post">
                        <span class="badge badge-danger" id="wrongsomethings">Tên đăng nhập hoặc mật khẩu không chính xác.</span>
                        <input type="text" name="username" id="username" placeholder="Vui lòng nhập tên đăng nhập vào đây" required><br>
                        <input type="password" name="password" id="password" placeholder="Vui lòng nhập mật khẩu vào đây" required><br>
                        <button type="submit" name="submit">Đăng nhập</button>&emsp;<a href="./register.php" role="button" class="btn btn-link btn-sm">Chưa có tài khoản?</a>
                        <?php include '../ctrl/letLogin.php'; ?>
                    </form>
                </div>
            </div>
        </div>
            <!-- 
                <div class='alert alert-info' id='content'>
                    <strong>Nhắc nhở!</strong> Bạn <h2><b>ĐÃ ĐĂNG NHẬP</b></h2> rồi, sử dụng tính năng của trang chủ <b><a href='../index.php' class='alert-link'>TẠI ĐÂY</a></b> <i class='fas fa-external-link-alt'></i>
                </div>
            -->
    </div>
</body>
<script>
$(document).ready(function(){
    $("#username").focus();

    $("#username, #password").keyup(function(){
        $("#wrongsomethings").hide();
    });
});
</script>
<?php
    $dbON -> close();
?>
</html>