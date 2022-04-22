    <?php
        session_start();
        include_once './conn/dbOFF.php';
        include_once './conn/dbON.php';
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="image/x-icon" href="./img/favicon.ico" rel="shortcut icon"/>
        <link rel="apple-touch-icon" sizes="180x180" href="./img/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon-16x16.png">
        <link rel="manifest" href="./img/site.webmanifest">
        <link rel="stylesheet" href="./css/index.css?1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <title>nhinguyen.rf.gd</title>
    </head>
    <body>
        <div class="container-fluid">
            <!-- nav -->
            <div class="row" id="nav">
                <ul id="menu">
                    <li>
                        <a href="javascript:void(0)">Trang chủ</a> <i class="fas fa-street-view" style="color: greenyellow;"></i>
                        <ul id="sub-menu" style="color: white;">
                            <li id="scr-info">Giới thiệu</li>
                            <li id="scr-public">Cộng đồng</li>
                            <li id="scr-comment">Bình luận</li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Phúc lợi</a>
                        <ul id="sub-menu">
                            <li><a href="./file/muster.php">Điểm danh</a></li>
                            <li><a href="./file/giftcode.php">Nhập giftcode</a></li>
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
            <div id="user">
                <i class="fas fa-user">
                    <br>
                    <?php
                    if(isset($_SESSION['username']))
                        echo "<p id='logged'>(trang cá nhân)</p>
                            <form action='./ctrl/letLogout.php' method='post'>
                                <input type='text' name='dirname' value='../index.php'>
                                <button class='btn btn-warning btn-xs' name='logout'>đăng xuất</button>
                            </form>
                            ";
                    else
                        echo "<p>(chưa đăng nhập)</p>";
                    ?>
                </i>
            </div><br>
            <!-- viewer -->
            <?php include './ctrl/loadViewer.php'; ?>
            <div class="row" id="des">
                <div class="col-sm-4"><u>Lượt ghé thăm</u>: <?php echo $_SESSION['views']; ?> <i class="fas fa-eye-slash" style="color: lime;"></i></div>
                <div class="col-sm-4"><u>Số thành viên</u>: <?php echo $_SESSION['members']; ?> <i class="fas fa-users" style="color: #49ff18;"></i></div>
                <div class="col-sm-4"><u id="rate">Được đánh giá</u>: <?php echo $_SESSION['avgstars']; ?><i class="fas fa-star" style="color: yellow;"></i></div>
            </div><hr>
            <!-- info -->
            <div class="row" id="info">
                <div class="col-sm-12">
                    <h1>GIỚI THIỆU:</h1>
                    <h3>&emsp;Minecraft là gì:</h3>
                    <p>&emsp;&emsp;- Minecraft là một trò chơi điện tử độc lập trong một thế giới mở với phong cách sandbox, được phát hành vào năm 2009 bởi lập trình viên người Thụy Điển Markus "Notch" Persson và sau đó được phát triển và phát hành bởi Mojang Studio.</p>
                    <p>&emsp;&emsp;- Khả năng sáng tạo và xây dựng Minecraft cho phép người chơi xây dựng các công trình bằng cách kết hợp các khối lập phương kết cấu trong một thế giới 3D. Các hoạt động khác trong game bao gồm tìm kiếm, thu thập tài nguyên, chế tạo và chiến đấu.</p>
                    <h3>&emsp;Sever minecraft <u>nhinguen.rf.gd</u>:</h3>
                    <p>- Được thành lập từ năm 2018 đến nay đã được 3 năm. Với minigame gồm các thể loại: skyblock, prison, towny, faction, 1vs1... đã từng thu hút rất nhiều kẻ sáng tạo cùng nhau tham gia tranh giành đua top trong thế giới hình vuông. Máy chủ luôn hứa hẹn cập nhật liên tục và tạo ra sự cạnh tranh công bằng giữa cày chay và donate để mang lại trải nghiệm tốt nhất cho bạn.</p>
                    <h3>&emsp;Nhà sáng lập:</h3>
                    <p>&emsp;&emsp;- Mình từng là 1 người chơi minecraft, rồi dần trở thành người sáng tạo lối chơi cho các bạn và dần trở thành nhà phát triển. Mình có 1 kênh youtube chuyên chia sẽ về file và hướng dẫn linh tinh, mong các bạn hãy ủng hộ bằng cách đăng ký giúp mình nhé. Đó là động lực giúp mình tạo ra các bộ tài nguyên miễn phí đến cho các bạn đi theo con đường sáng tạo minecraft. <a href="https://www.youtube.com/channel/UCWB4agz7YPLibGMLUtydeyQ" target="_blank"> Link đăng ký</a></p>
                    <h3>&emsp;Trang web này:</h3>
                    <p>&emsp;&emsp;- Đây là nơi mình lưu trữ file và các tài liệu, các bạn hãy tương tác để nhận phúc lợi (xu, cw($)...) và góp ý để mình có thể sớm khắc phục nhé lỗi (nếu có) nhé.</p>
                    <p>&emsp;&emsp;- Các bạn hãy ủng hộ mình qua donate MOMO: <b><u>0338188506</u></b>. Để mình có động lực và ít tài chính để tiếp tục chia sẽ file nha.</p>
                </div>
            </div><hr>
            <!-- pulic -->
            <div class="row" id="public">
                <div class="col-sm-12">
                    <h1>FANPAGE:</h1>
                    <div id="social">
                        <div id="yt"></div>
                        <div id="fb"></div>
                        <div id="zl"></div>
                    </div>
                    <div id="des-social" class="text-center">
                        <div id="des-yt"><a href="https://www.youtube.com/channel/UCWB4agz7YPLibGMLUtydeyQ" target="_blank">Nhấp vào đây để liên kết</a> <i class="fas fa-link"></i></div>
                        <div id="des-fb"><a href="https://www.facebook.com/taiproduaxe/" target="_blank">Nhấp vào đây để liên kết</a> <i class="fas fa-link"></i></div>
                        <div id="des-zl"><a href="https://chat.zalo.me/" target="_blank">Nhấp vào đây để liên kết</a> <i class="fas fa-link"></i></div>
                    </div>
                </div>
            </div>
            <hr>
            <!-- comment -->
            <div class="row" id="comment">
                <div class="col-sm-12">
                    <h1>BÌNH LUẬN:</h1>
                    <form action="" method="post">
                        <textarea name="cmt-box" id="cmt-box">Hãy viết lên suy nghĩ của bạn.</textarea>
                        <button id="letComment" name="letComment">Bình luận</button>
                        <button type="button" id="fakeComment">Bình luận</button>
                        <?php include './ctrl/letComment.php'; ?>
                    </form>
                    <br><br>
                    <div class="cmt-user" id="cmt-0">
                        <div id="cmt-user-left">
                            <img src="./img/cmt-user.png" alt="" class="rounded-circle" width="100%">
                        </div>
                        <div id="cmt-user-right">
                            <p><b>king5google</b> <i>(ngày 03/01/2022)</i>:</p>
                            <p><i class="fas fa-pen">:</i> Mọi công dân đều có quyền tự do ngôn luận.</p>
                        </div>
                    </div>
                    <?php include './ctrl/loadComment.php'; ?>
                </div>
            </div>
            <!-- modal -->
            <style>
                .testModal{
                    background-image: linear-gradient(to top, #fff1eb 0%, #ace0f9 100%);
                    position: fixed;
                    transform: translate(-50%, -50%);
                    top: 50%;
                    left: 50%;
                    border-radius: 10px;
                    padding: 15px;
                    display: none;
                }
                .testModal *{
                    color: black;
                    padding: 10px;
                }
                .modalClose{
                    display: flex;
                }
                .modalClose button, .modalClose a{
                    width: 100%;
                    margin: auto;
                    padding: 8px;
                    text-align: center;
                }
                .modalClose .action{
                    background-image: linear-gradient(to top, #0fd850 0%, #f9f047 100%);
                }
            </style>
            <div class="testModal" id="nolog">
                <div class="contentModal">
                    <strong>Vui lòng chọn đăng nhập bên dưới để tiếp tục</strong>
                </div>
                <div class="modalClose">
                    <a href="./file/login.php" role="button" class="action">Đăng nhập</a>
                    <button class="btn btn-light" id="closeModal">Đóng lại</button>
                </div>
            </div>
            <form method="post">
            <div class="testModal" id="rateBox">
                <div class="contentModal">
                    <i class="far fa-star fa-3x" id="star1"></i>
                    <i class="far fa-star fa-3x" id="star2"></i>
                    <i class="far fa-star fa-3x" id="star3"></i>
                    <i class="far fa-star fa-3x" id="star4"></i>
                    <i class="far fa-star fa-3x" id="star5"></i>
                    <input type="hidden" name="rated" id="rated">
                </div>
                <div class="modalClose">
                    <button type="submit" class="action" name="getRate">Đánh giá</button>
                    <button type="button" class="btn btn-light" id="closeModal">Đóng lại</button>
                </div>
                <?php include './ctrl/letRate.php'; ?>
            </div>
            </form>
        </div><!--end container-->
    </body>
    <script>
    $(document).ready(function(){

        //Nhap icon trang ca nhan
        $("#logged").click(function(){
            window.location.href = "./file/panel.php";
        });

        //bình luận rỗng
        $("#comment").mousemove(function(){
            var s = $("#cmt-box").val();
            if(s != "Hãy viết lên suy nghĩ của bạn." && s != ""){
                $("#fakeComment").hide();
                $("#letComment").show();
            } else{
                $("#fakeComment").show();
                $("#letComment").hide();
            }
        });

        //closeModal
        $("button#closeModal").click(function(){
            $(this).parent().parent().hide();
        });

        //Move ảo
        $("#scr-info").click(function(){
            $(document).scrollTop( $("#info").offset().top );
        });
        $("#scr-public").click(function(){
            $(document).scrollTop( $("#public").offset().top );
        });
        $("#scr-comment").click(function(){
            $(document).scrollTop( $("#comment").offset().top );
        });
        //cmt box focus
        $("#cmt-box").focus(function(){
            $(this).val("");
        });
        //hiện box rate 5sao
        $("#rate").click(function(){
            $("#rateBox").show();
        });
        //hover 5sao đánh vàng
        $("#star1").hover(function(){
            $(this).attr('class','fas fa-star fa-3x');
            $("#star2").attr('class','far fa-star fa-3x');
            $("#star3").attr('class','far fa-star fa-3x');
            $("#star4").attr('class','far fa-star fa-3x');
            $("#star5").attr('class','far fa-star fa-3x');
            $("#rated").val(1);
        });
        $("#star2").hover(function(){
            $(this).attr('class','fas fa-star fa-3x');
            $("#star1").attr('class','fas fa-star fa-3x');
            $("#star3").attr('class','far fa-star fa-3x');
            $("#star4").attr('class','far fa-star fa-3x');
            $("#star5").attr('class','far fa-star fa-3x');
            $("#rated").val(2);
        });
        $("#star3").hover(function(){
            $(this).attr('class','fas fa-star fa-3x');
            $("#star1").attr('class','fas fa-star fa-3x');
            $("#star2").attr('class','fas fa-star fa-3x');
            $("#star4").attr('class','far fa-star fa-3x');
            $("#star5").attr('class','far fa-star fa-3x');
            $("#rated").val(3);
        });
        $("#star4").hover(function(){
            $(this).attr('class','fas fa-star fa-3x');
            $("#star1").attr('class','fas fa-star fa-3x');
            $("#star2").attr('class','fas fa-star fa-3x');
            $("#star3").attr('class','fas fa-star fa-3x');
            $("#star5").attr('class','far fa-star fa-3x');
            $("#rated").val(4);
        });
        $("#star5").hover(function(){
            $(this).attr('class','fas fa-star fa-3x');
            $("#star1").attr('class','fas fa-star fa-3x');
            $("#star2").attr('class','fas fa-star fa-3x');
            $("#star3").attr('class','fas fa-star fa-3x');
            $("#star4").attr('class','fas fa-star fa-3x');
            $("#rated").val(5);
        });
    });
    </script>
    </html>
<?php
    $dbOFF -> close();
    $dbON -> close();
?>