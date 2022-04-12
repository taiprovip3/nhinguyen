<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: ../index.php");
        exit();
    }
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
        <title>nhinguyen.rf.gd | Panel</title>
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
            textarea, button, input{
                outline: none;
                border: none;
            }
            .container-fluid{
                background-image: url("./img/bg3.png");
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
                            <li><a href="./login.php">Đăng nhập</a></li>
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
            <!-- welcome -->
            <style>
                #welcome{
                    line-height: 0;
                }
                #welcome h1{
                    color: black;
                    text-decoration: none;
                }
            </style>
            <div id="welcome">
                <h1>Xin chào, <u><?php echo $_SESSION['username']; ?></u>!</h1><br>
                <h2>Đây là bảng điều khiển (panel) của bạn, có thể tự do điều khiển các tác vụ:</h2>
            </div>
            <br>
            <!-- panel -->
            <style>
                #panel{
                    display: flex;
                }
                #panel div{
                    background: blanchedalmond;
                    width: 32%;
                    margin: auto;
                    padding: 30px;
                    border-radius: 30px;
                }
                #panel div:hover{
                    cursor: pointer;
                    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
                }
            </style>
            <div class="row" id="panel">
                <div id="pro">
                    <h4>Profile <i class="fas fa-address-card"></i></h4>
                    <hr>
                    <p>-> Xem hoặc chỉnh sửa thông tin cá nhân</p>
                    <p>(Nhấp vào)</p>
                </div>
                <div id="inv">
                    <h4>Inventory <i class="fas fa-boxes"></i></h4>
                    <hr>
                    <p>-> Túi vật phẩm cá nhân chứa tiền, tài nguyên..</p>
                    <p>(Nhấp vào)</p>
                </div>
                <div id="mbox">
                    <h4>MailBox <i class="fas fa-mail-bulk"></i></h4>
                    <hr>
                    <p>-> Hộp tin nhắn, thư từ, lời nhắc đến bạn</p>
                    <p>(Nhấp vào)</p>
                </div>
            </div>
            <br>
            <!-- hiden content -->
            <style>
                #inventory, #mailbox{
                    display: none;
                }
                .item{
                    /* border: 2px solid red; */
                }
                #profile input, #profile input:read-only, #profile select:disabled{
                    background: white;
                }
                #profile i{
                    color: #4295f5;
                }
                #profile button{
                    font-weight: 900;
                    padding: 7px;
                    width: 16%;
                }
                #edLabel:hover, #edSelect:hover{
                    cursor: pointer;
                    text-shadow: 0 0 5px #FFF, 0 0 10px #FFF, 0 0 15px #FFF, 0 0 20px #49ff18, 0 0 30px #49FF18, 0 0 40px #49FF18, 0 0 55px #49FF18, 0 0 75px #49ff18;
                }
            </style>
            <div id="profile" class="item alert alert-info">
                <form method="post">
                <div class="form-group">
                    <label>Thành viên thứ:</label>
                    <input type="text" class="form-control" name="inpStt" id="inpStt" value="<?php
                        $serials = getSerial($_SESSION['username'], $dbOFF);
                        echo $serials[0];
                    ?>" readonly>
                </div>
                <div class="form-group">
                    <label>Mã người dùng:</label>
                    <input type="text" class="form-control" name="inpId" id="inpId" value="<?php
                    if($serials[1] == '')
                        echo '(chưa vào game -> chưa xác định)';
                    else 
                        echo $serials[1]; ?>" readonly>
                </div>
                <div class="form-group">
                    <label id="edLabel">Email: <i class="far fa-edit"></i></label>
                    <input type="text" class="form-control" name="inpEmail" id="inpEmail" value="<?php
                        echo $serials[2]; ?>" readonly>
                </div>
                <div class="form-group">
                    <label id="edLabel">SĐT: <i class="far fa-edit"></i></label>
                    <input type="text" class="form-control" name="inpPhone" id="inpPhone" value="<?php
                        echo $serials[3]; ?>" readonly>
                </div>
                <hr>
                <div class="form-group">
                    <label id="edLabel">Họ và tên: <i class="far fa-edit"></i></label>
                    <input type="text" class="form-control" name="inpName" id="inpName" value="<?php
                        echo $serials[4]; ?>" readonly>
                </div>
                <div class="form-group">
                    <label id="edLabel">Tuổi: <i class="far fa-edit"></i></label>
                    <input type="text" class="form-control" name="inpAge" id="inpAge" value="<?php
                        echo $serials[5]; ?>" readonly>
                </div>
                <div class="form-group">
                    <label id="edSelect" for="selSex">Giới tính: <i class="far fa-edit"></i></label>
                    <select class="form-control" id="selSex" name="selSex">
                        <?php
                            if($serials[6] == '' || $serials[6] == 'Nam'){
                                echo '
                                <option value="Nam" selected="selected">Nam</option>
                                <option value="Nữ">Nữ</option>
                                ';
                            } else{
                                echo '
                                <option value="Nam">Nam</option>
                                <option value="Nữ" selected="selected">Nữ</option>
                                ';
                            }
                        ?>
                    </select>
                </div>
                <hr>
                <div class="form-group">
                    <label id="edLabel">Mật khẩu hiện tại: <i class="far fa-edit"></i></label>
                    <input type="text" class="form-control" name="inputPassword" id="inpPassword" value="********" readonly>
                </div>
                <button class="btn btn-info" name="update">Cập nhật</button>
                <?php include '../ctrl/updateProfile.php'; ?>
                </form>
            </div>
            <div id="inventory" class="item">
                B
            </div>
            <div id="mailbox" class="item">
                C
            </div>
        </div><!--end container-->
    </body>
    <!-- modals -->
    <style>
        #rateBox .far, #rateBox .fas{
            cursor: pointer;
            color: #fada0c;
        }
        #rated{
            display: none;
        }
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
                            <strong>Bạn chưa đăng nhập!</strong> cần biết bạn là ai mới có thể bình luận, vào trang login <a href="./file/login.php" class="alert-link">TẠI ĐÂY <i class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                    </div>
            </div>
        </div>
    </div>
    <script>
    $(document).ready(function(){
        //profile nút edit
        $("label#edLabel").click(function(){
            var x = $(this).parent().find("input");
            x.removeAttr("readonly");
            x.focus();
            $(this).find("i").text(" (editing)");
        });
        $("label#edSelect").click(function(){
            var x = $(this).parent().find("select");
            x.removeAttr("disabled");
            $(this).find("i").text(" (editing)");
        });
        //click từng item
        $("#pro").click(function(){
            $(this).css("box-shadow", "rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px");
            $("#inv").css("box-shadow", "unset");
            $("#mbox").css("box-shadow", "unset");
            $("#profile").show();
            $("#inventory").hide();
            $("#mailbox").hide();
        });
        $("#inv").click(function(){
            $(this).css("box-shadow", "rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px");
            $("#pro").css("box-shadow", "unset");
            $("#mbox").css("box-shadow", "unset");
            $("#inventory").show();
            $("#profile").hide();
            $("#mailbox").hide();
        });
        $("#mbox").click(function(){
            $(this).css("box-shadow", "rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px");
            $("#pro").css("box-shadow", "unset");
            $("#inv").css("box-shadow", "unset");
            $("#mailbox").show();
            $("#profile").hide();
            $("#inventory").hide();
        });
    });
    </script>
    </html>
<?php
    $dbOFF -> close();
?>