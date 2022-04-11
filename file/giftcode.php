<?php
        session_start();
        include_once '../conn/dbOFF.php';
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
        <title>nhinguyen.rf.gd | Giftcode</title>
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: cursive;
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
            body{
                background-image: url("../img/bg2.png");
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
                    z-index: 1;
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
                            <li><a href="./file/muster.php">Điểm danh</a></li>
                            <li><a href="javascript:void(0)">Nhập giftcode</a> <i class="fas fa-street-view" style="color: greenyellow;"></i></li>
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
                    color: black;
                    border-radius: 20px;
                    width: 130px;
                    margin: auto;
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
                <i class="fas fa-user" style="color: greenyellow;">
                    <br>
                    <?php
                    if(isset($_SESSION['username']))
                        echo "<p id='logged'>(đã đăng nhập)</p>
                            <form action='./ctrl/letLogout.php' method='post'>
                                <input type='text' name='dirname' value='../index.php'>
                                <button class='btn btn-warning btn-xs' name='logout'>đăng xuất</button>
                            </form>
                            ";
                    else
                        echo "<p>(chưa đăng nhập)</p>";
                    ?>
                </i>
            </div>
            <!-- code -->
            <style>
                #code h1{
                    font-weight: 900;
                    color: whitesmoke;
                    text-decoration: none;
                }
                #code input{
                    width: 100%;
                    padding: 30px;
                    font-size: xx-large;
                    border-radius: 50px;
                    font-style: italic;
                    font-weight: 800;
                    background: #e6ebe7;
                }
                #code input:focus{
                    box-shadow: rgb(85, 91, 255) 0px 0px 0px 3px, rgb(31, 193, 27) 0px 0px 0px 6px, rgb(255, 217, 19) 0px 0px 0px 9px, rgb(255, 156, 85) 0px 0px 0px 12px, rgb(255, 85, 85) 0px 0px 0px 15px;
                }
                #code button{
                    padding: 20px;
                    border-radius: 30px;
                    background: #4fdb74;
                    font-size: xx-large;
                    margin-top: 25px;
                    font-weight: 900;
                }
            </style>
            <div id="code">
                <form method="post">
                    <h1>Nhập mã code:</h1>
                    <br>
                    <input type="text" name="inpcode" id="inpcode">
                    <br>
                    <button name="getCode" type="submit">Xác nhận</button>
                </form>
            </div>
            <br><br><br>
            <h1 id="spoiltitle"><i class="fas fa-gifts" style="color: green;"></i>Các event có thể nhận Giftcode<i class="fas fa-donate" style="color: gold;"></i></h1>
            <!-- spoil -->
            <style>
                #spoiltitle{
                    color: white;
                    font-weight: 900;
                    text-decoration: none;
                }
                #spoil{
                    display: flex;
                    flex-wrap: wrap;
                    color: #1bf7f7;
                }
                #spoil div{
                    border: 7px solid white;
                    width: 30%;
                    margin: 3px auto;
                    padding: 10px;
                    border-radius: 10px;
                }
            </style>
            <div class="row" id="spoil">
                <div>
                    <h3>GIỖ TỔ HÙNG VƯƠNG</h3>
                    <p>- Đây là ngày hội truyền thống của Người Việt tưởng nhớ công lao dựng nước của Hùng Vương. Nghi lễ truyền thống được tổ chức hàng năm vào mùng 10 tháng 3 Âm lịch</p>
                    <p>- Giỗ tổ Hùng Vương tiếng anh là The Death anniversary of the Hung Kings</p>
                    <button class="btn btn-primary" id="spoild1">Check giftcode</button>
                </div>
                <div>
                    <h3>NGÀY THỐNG NHẤT</h3>
                    <p>- Ngày lễ 30 tháng 4, tên chính thức là Ngày Giải phóng (hoàn toàn) miền Nam, thống nhất đất nước, Ngày Chiến thắng, Ngày Thống nhất là một ngày lễ quốc gia của Việt Nam, đánh dấu sự kiện chấm dứt kháng chiến chống Mỹ cứu nước khi Tổng thống Dương Văn Minh và Thủ tướng Vũ Văn Mầu của chính thể Việt Nam Cộng hòa tuyên bố đầu hàng vô điều kiện Chính phủ Cách mạng lâm thời Cộng hòa miền Nam Việt Nam vào trưa ngày 30 tháng 4 năm 1975</p>
                    <button class="btn btn-primary" id="spoild2">Check giftcode</button>
                </div>
                <div>
                    <h3>LỄ QUỐC KHÁNH</h3>
                    <p>- Là ngày lễ chính thức của Việt Nam, diễn ra vào ngày 2 tháng 9 hằng năm, kỷ niệm ngày Chủ tịch Hồ Chí Minh đọc bản Tuyên ngôn độc lập tại Quảng trường Ba Đình, Hà Nội, khai sinh ra nước Việt Nam Dân chủ Cộng hòa, một trong các tiền thân của nước Cộng hòa Xã hội Chủ nghĩa Việt Nam ngày nay</p>
                    <button class="btn btn-primary" id="spoild3">Check giftcode</button>
                </div>
                <div>
                    <h3>QUỐC TẾ LAO ĐỘNG</h3>
                    <p>- Là ngày lễ kỷ niệm của phong trào công nhân quốc tế và của người lao động vào ngày 1 tháng 5 hằng năm, tại nhiều quốc gia trên thế giới, thường có các cuộc biểu tình trên đường phố của hàng triệu người lao động và các tổ chức công đoàn của họ.</p>
                    <button class="btn btn-primary" id="spoild4">Check giftcode</button>
                </div>
                <div>
                    <h3>TẾT NGUYÊN ĐÁN</h3>
                    <p>- Là dịp lễ đầu năm mới theo âm lịch của các dân tộc thuộc Vùng văn hóa Đông Á, gồm có Trung Quốc, Nhật Bản, bán đảo Triều Tiên, Đài Loan và Việt Nam</p>
                    <button class="btn btn-primary" id="spoild5">Check giftcode</button>
                </div>
                <div>
                    <h3>TẾT DƯƠNG LỊCH</h3>
                    <p>- Là một ngày lễ diễn ra vào ngày 1 tháng 1, ngày đầu tiên trong năm theo lịch Gregorius cũng như lịch Julius, là dịp lễ quan trọng trong năm của nhiều dân tộc và nền văn hóa trên thế giới</p>
                    <button class="btn btn-primary" id="spoild6">Check giftcode</button>
                </div>
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
    <!-- codeBox -->
    <form method="post">
        <div class="modal fade" tabindex="-1" role="dialog" id="giftBox">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hãy bình chọn cho chất lượng của website để chúng tôi sớm cải thiện!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <i class="far fa-star fa-3x" id="star1"></i>
                    <i class="far fa-star fa-3x" id="star2"></i>
                    <i class="far fa-star fa-3x" id="star3"></i>
                    <i class="far fa-star fa-3x" id="star4"></i>
                    <i class="far fa-star fa-3x" id="star5"></i>
                    <input type="text" name="rated" id="rated">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info" name="getRate">Đánh giá</button>
                    <button type="button" class="btn btn-light" data-dismiss="modal">Đóng</button>
                </div>
                </div>
            </div>
        </div>
    </form>
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
    </html>
<?php
    $dbOFF -> close();
?>