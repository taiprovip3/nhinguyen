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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <title>nhinguyen.rf.gd</title>
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
            .container-fluid{
                background-image: url("./img/bg.png");
            }
            #menu{
                display: flex;
                list-style: none;
                width: 100%;
            }
            #menu > li{
                padding: 2px;
                font-size: larger;
                font-weight: 800;
                background: green;
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
                list-style: none;
                position: absolute;
                width: 19.1%;
            }
            #sub-menu a{
                text-decoration: none;
            }
            #sub-menu > li{
                background: forestgreen;
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
                            <li id="scr-comment">Bình luận</li>`
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Phúc lợi</a>
                        <ul id="sub-menu">
                            <li><a href="javascript:void(0)">Điểm danh</a></li>
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
                <i class="fas fa-user">
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
            <!-- head -->
            <style>
                #head{
                    text-align: center;
                }
            </style>
            <br>
            <div id="head">
                <img src="https://images.cooltext.com/5573532.png" width="838" height="115" alt="NHINGUYEN.RF.GD" />
            </div>
            <!-- description -->
            <style>
                #des div{
                    text-align: center;
                    color: white;
                    font-weight: bold;
                }
                #rate{
                    cursor: pointer;
                    color: #FFFFFF;
                    background: #232323;
                    text-shadow: 0 0 5px #FFF, 0 0 10px #FFF, 0 0 15px #FFF, 0 0 20px #49ff18, 0 0 30px #49FF18, 0 0 40px #49FF18, 0 0 55px #49FF18, 0 0 75px #49ff18;
                }
            </style><?php include './ctrl/loadViewer.php'; ?>
            <div class="row" id="des">
                <div class="col-sm-4"><u>Lượt ghé thăm</u>: <?php echo $_SESSION['views']; ?> <i class="fas fa-eye-slash" style="color: lime;"></i></div>
                <div class="col-sm-4"><u>Số thành viên</u>: <?php echo $_SESSION['members']; ?> <i class="fas fa-users" style="color: #49ff18;"></i></div>
                <div class="col-sm-4"><u id="rate">Được đánh giá</u>: <?php echo $_SESSION['avgstars']; ?><i class="fas fa-star" style="color: yellow;"></i></div>
            </div>
            <hr>
            <!-- info -->
            <style>
                #info h3{
                    font-weight: bold;
                }
                #info p{
                    color: blue;
                }
                #info a{
                    text-decoration: underline;
                    font-weight: 800;
                }
            </style>
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
            </div>
            <hr>
            <!-- pulic -->
            <style>
                #public h3{
                    font-weight: 900;
                }
                #social{
                    display: flex;
                    height: 220px;
                }
                #des-social{
                    display: flex;
                }
                #yt,#fb,#zl,#des-yt,#des-fb,#des-zl{
                    width: 33.33%;
                }
                #yt{
                    background-image: url("./img/yt.png");
                }
                #fb{
                    background-image: url("./img/fb.png");
                }
                #zl{
                    background-image: url("./img/zl.png");
                }
                #des-social a{
                    text-decoration: none;
                    color: #001a0a;
                    font-size: large;
                }
                #des-social a:hover{
                    font-weight: bold;
                    text-decoration: underline;
                }
            </style>
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
            <style>
                #comment textarea{
                    width: 100%;
                    padding: 10px;
                    border-radius: 5px;
                }
                .cmt-user{
                    display: flex;
                }
                #cmt-user-left{
                    width: 5%;
                }
                #cmt-user-right{
                    line-height: 1.1;
                }
                #comment button{
                    padding: 6px;
                    width: 120px;
                    border-radius: 5px;
                }
                #comment button:hover{
                    background: #38CE66;
                    font-weight: bold;
                }
                #letComment{
                    display: none;
                }
            </style>
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
    <!-- rateBox -->
    <form action="" method="post">
        <div class="modal fade" tabindex="-1" role="dialog" id="rateBox">
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
        <?php include './ctrl/letRate.php'; ?>
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
    <script>
    $(document).ready(function(){

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
            $("#rateBox").modal('toggle');
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