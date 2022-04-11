<?php
        session_start();
        include_once '../conn/dbOFF.php';
        include '../func/methods.php';
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
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <title>nhinguyen.rf.gd | Điểm danh</title>
        <style>
            *{
                margin: 0;
                padding: 0;
            }
            h1{
                font-weight: 900;
                text-decoration: underline;
                text-shadow: 2px 2px 2px #1C0D1F;
            }
            textarea, button{
                outline: none;
                border: none;
            }
            body{
                background-image: url("../img/enderEye.gif");
                background-repeat: repeat;
                background-size: cover;
            }

        </style>
    </head>
    <body>
        <div class="container-fluid">
            <!-- nav -->
            <style>
                #menu{
                display: flex;
                list-style: none;
                width: 100%;
                }
                #menu > li{
                    padding: 5px;
                    font-size: larger;
                    font-weight: 800;
                    background: #4fdb74;
                    width: 100%;
                    text-align: center;
                    position: relative;
                }
                #menu a{
                    text-decoration: none;
                    color: white;
                }
                #sub-menu{
                    list-style: none;
                    position: absolute;
                    width: 100%;
                }
                #sub-menu a{
                    text-decoration: none;
                }
                #sub-menu > li{
                    background: #4fdb74;
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
                }
            </style>
            <div class="row" id="nav">
                <ul id="menu">
                    <li>
                        <a href="../index.php">Trang chủ</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Phúc lợi</a>
                        <ul id="sub-menu">
                            <li><a href="javascript:void(0)">Điểm danh</a> <i class="fas fa-street-view" style="color: greenyellow;"></i></li>
                            <li><a href="javascript:void(0)">Nhập giftcode</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Cửa hàng</a>
                        <ul id="sub-menu">
                            <li><a href="./file/shopfile.php">Shop file</a></li>
                            <li><a href="./file/shopplugin.php">Shop plugin</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Tài khoản</a>
                        <ul id="sub-menu">
                            <li><a href="./file/register.php">Đăng ký</a></li>
                            <li><a href="./file/login.php">Đăng nhập</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Danh mục khác</a>
                        <ul id="sub-menu">
                            <li><a href="./file/download.html">Tải xuống</a></li>
                            <li><a href="./file/help.html">Trợ giúp</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- box user -->
            <style>
                #user{
                    border: 1px solid grey;
                    padding: 20px 0;
                    font-size: 99%;
                    text-align: center;
                    color: white;
                    border-radius: 20px;
                    width: 130px;
                    position: absolute;
                    right: 0;
                }
                #user:hover{
                    cursor: pointer;
                    opacity: 0.4;
                    background: grey;
                }
                #logged{
                    color: #202c2d;
                    background: #FFFFFF;
                    text-shadow: 0 1px #808d93, -1px 0 #cdd2d5, -1px 2px #808d93, -2px 1px #cdd2d5, -2px 3px #808d93, -3px 2px #cdd2d5, -3px 4px #808d93, -4px 3px #cdd2d5, -4px 5px #808d93, -5px 4px #cdd2d5, -5px 6px #808d93, -6px 5px #cdd2d5, -6px 7px #808d93, -7px 6px #cdd2d5, -7px 8px #808d93, -8px 7px #cdd2d5;
                }
                #user input{
                    display: none;
                }
            </style>
            <div id="user">
                <i class="fas fa-user">
                    <br>
                    <?php
                    if(isset($_SESSION['username']))
                        echo "<p id='logged'>(đã đăng nhập)</p>
                            <form action='../ctrl/letLogout.php' method='post'>
                                <input type='text' name='dirname' value='../file/muster.php'>
                                <button class='btn btn-warning btn-xs' name='logout'>đăng xuất</button>
                            </form>
                            ";
                    else
                        echo "<p>(chưa đăng nhập)</p>";
                    ?>
                </i>
            </div>
            <!-- muster -->
            <style>
                #muster{
                    height: 50vh;
                    display: flex;
                }
                #mustercon{
                    margin: auto;
                }
                #musterbut{
                    border: 10px solid white;
                    background-image: url("../img/enderEye.gif");
                    background-size: cover;
                    border-radius: 50%;
                    font-weight: 900;
                    font-size: 300%;
                    color: white;
                    height: 30vh;
                    
                }
                #musterbut:hover{
                    cursor: pointer;
                    box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px, rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px;
                }
            </style>
            <div class="row" id="muster">
                <div id="mustercon">
                    <form action="" method="post">
                        <button id="musterbut" type="submit" name="muster">Điểm danh</button>
                        <?php 
                            include '../ctrl/letMuster.php';
                        ?>
                    </form>
                </div>
            </div>
            <!-- spoil -->
            <style>
                #spoil{
                    display: flex;
                    color: white;
                }
                #spoil div{
                    /* border: 5px solid white; */
                    margin: auto;
                    border-radius: 50%;
                    width: 50%;
                    padding: 5%;
                }
                #spoil ul li{
                    list-style-type: circle;
                }
            </style>
            <div class="row" id="spoil">
                <div>
                    <h4>Quy tắc:</h4>
                    <ul>
                        <li>Không tạo nhiều hơn >1 tài khoản để bug token (sẽ có quét cạn ips). TH vi phạm sẽ bị ban ips account.</li>
                        <li>Điểm danh reset vào 00h:00m mỗi ngay</li>
                        <li>1 ngày điểm danh = +1 token</li>
                    </ul>
                </div>
                <div>
                    <h4>Records của bạn:</h4>
                    <ul>
                        <li>Số lần điểm danh: <?php if(isset($_SESSION['username'])) echo getCountMuster($_SESSION['username'],$dbOFF); ?> <i class="far fa-calendar-check" style="color: #1ea645;"></i></li>
                        <li>Số token: <?php if(isset($_SESSION['username'])) echo getToken($_SESSION['username'], $dbOFF); ?> <i class="far fa-money-bill-alt" style="color: #1ea645;"></i></li>
                    </ul>
                </div>
            </div>
        </div><!--end container-->
    </body>
    <!-- modals -->
    <style>
        .modal-footer button{
            width: 48.5%;
        }
    </style>
    <!-- No Login Yet -->
    <div class="modal" id="nolog">
        <div class="modal-dialog">
            <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="alert alert-danger">
                            <strong>Chưa đăng nhập!</strong> vui lòng đến trang login bằng cách nhấp <a href="./login.php" class="alert-link">VÀO ĐÂY <i class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                    </div>
            </div>
        </div>
    </div>
    <!-- Mustered -->
    <div class="modal" id="mustered">
        <div class="modal-dialog">
            <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="alert alert-info">
                            <strong>Quá vội vàng!</strong> Hôm nay bạn đã điểm danh rồi <i class="far fa-calendar-check"></i>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Tôi đã hiểu</button>
                    </div>
            </div>
        </div>
    </div>
    <!-- Mustered -->
    <div class="modal" id="succtran">
        <div class="modal-dialog">
            <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="alert alert-success">
                            <strong>Thành công!</strong> Điểm danh thành công. +1 token <i class="fas fa-check-double" style="color: #1ea645;"></i>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Đã hiểu</button>
                    </div>
            </div>
        </div>
    </div>
    <script>
    $(document).ready(function(){

    });
    </script>
    </html>
<?php
    $dbOFF -> close();
?>