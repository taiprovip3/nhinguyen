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
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <title>nghinguyen.rf.gd | Shop</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
            font-family: system-ui;
        }
        body{
            background-image: url("../img/bg2.png");
            background-size: cover;
        }
        input,button{
            outline: none;
            border: none;
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
        <div id="nav">
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
                        <li><a href="javascript:void(0)">Shop file</a> <i class="fas fa-street-view" style="color: greenyellow;"></i></li>
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
        <!-- note -->
        <style>
            #note{
                margin: auto;
            }
        </style>
        <div class="text-center" id="note">
                <span class="badge badge-secondary"><strong><i class="far fa-money-bill-alt" style="color: #1ea645;"></i></strong> <i>có thể nhận miễn phí bằng điểm danh bạn nhé!</i></span>
        </div>
        <!-- icon -->
        <style>
            #icon{
                background: white;
                border-radius: 5px;
                padding: 3px;
                line-height: 50%;
                width: 120px;
                margin: auto;
            }
            #icon ul li{
                list-style-type: none;
            }
        </style>
        <div class="row" id="icon">
            <div class="text-center">
                <i class="fas fa-user-alt fa-2x"></i>
                <p><?php
                if(isset($_SESSION['username'])){
                    echo $_SESSION['username'];
                } else{
                    echo "Chưa login";
                }
                ?></p>
            </div>
            <ul>
                <li><i class="far fa-money-bill-alt" style="color: #1ea645;"></i>: <span id="token"><?php 
                if(isset($_SESSION['username'])){
                    echo getToken($_SESSION['username'], $dbOFF);
                }
                ?></span></li>
                <li><i class="fas fa-coins" style="color: #dbcb2e;"></i>: <span id="coint"><?php
                if(isset($_SESSION['username'])){
                    echo getCoin($_SESSION['username'], $dbOFF);
                }
                ?></span></li>
            </ul>
        </div>
        <!-- content -->
        <style>
            #content{
                display: flex;
                flex-wrap: wrap;
                font-size: large;
                padding: 10px;
            }
            #file{
                background: white;
                width: 31%;
                margin: 3px auto;
                padding: 3px;
                line-height: 131%;
                align-self: center;
            }
            #file:hover{
                box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
                cursor: pointer;
            }
            #file h3{
                font-weight: 900;
            }
            #file button{
                background: #1fc488;
                padding: 7px;
                width: 49%;
            }
        </style>
        <div class="row" id="content">
            <div id="file">
                <input type="hidden" id="fileid" value="0">
                <div class="text-center">
                    <h3 id="filename"><b>OP SKYBLOCK 1.0</b></h3>
                    <p>(Đã bán: <u><?php echo getCountDown('0', $dbOFF); ?></u> <i class="fas fa-user-md"></i>)</p>
                    <img src="../img/bg3.png" alt="opskyblockv1" class="img-thumbnail" width="70%">
                </div>
                <strong>Thông tin:</strong>
                <p>- Version file: v1.0 vinasky.ga</p>
                <p>- Version ingame: 1.14</p>
                <p>- Dung lượng: 166.8MB (zipped)</p>
                <p>- Ngày phát hành: 26/09/2021</p>
                <strong>Thông tin Khác:</strong>
                <p>- File đã config + việt hoá 88%</p>
                <p>- Chưa cài plugin phụ (như antihack, napthe...vv)</p>
                <p>- File chưa chạy thực nghiệm và chưa kiểm thử</p>
                <p>- Có hỗ trợ fix bug hoặc lỗi khi chạy file</p>
                <strong>SELL:</strong>
                <p>-<span id="filecost">1</span>.0$ <i class="far fa-money-bill-alt" style="color: #1ea645;"></i></p>
                <button type="button" id="buy"><i class="fas fa-shopping-cart"></i> MUA NGAY</button>
                <button type="button" id="review">REVIEW <i class="fas fa-images"></i></button>
            </div>
            <div id="file">
                <input type="hidden" id="fileid" value="1">
                <div class="text-center">
                    <h3 id="filename"><b>OP SKYBLOCK 2.0</b></h3>
                    <p>(Đã bán: <u><?php echo getCountDown('1', $dbOFF); ?></u> <i class="fas fa-user-md"></i>)</p>
                    <img src="../img/bg3.png" alt="opskyblockv1" class="img-thumbnail" width="70%">
                </div>
                <strong>Thông tin:</strong>
                <p>- Version file: v2.0 vinasky.ga</p>
                <p>- Version ingame: 1.14.4</p>
                <p>- Dung lượng: 95.8MB (zipped)</p>
                <p>- Ngày phát hành: 11/01/2021</p>
                <strong>Thông tin Khác:</strong>
                <p>- File đã config + việt hoá 88%</p>
                <p>- Chưa cài plugin phụ (như antihack, napthe...vv)</p>
                <p>- File chưa chạy thực nghiệm và chưa kiểm thử</p>
                <p>- Được cải tiến từ ver1</p>
                <p>- Có hỗ trợ fix bug hoặc lỗi khi chạy file</p>
                <strong>SELL:</strong>
                <p>-<span id="filecost">2</span>.0$ <i class="far fa-money-bill-alt" style="color: #1ea645;"></i></p>
                <button type="button" id="buy"><i class="fas fa-shopping-cart"></i> MUA NGAY</button>
                <button type="button" id="review">REVIEW <i class="fas fa-images"></i></button>
            </div>
            <div id="file">
                <input type="hidden" id="fileid" value="2">
                <div class="text-center">
                    <h3 id="filename"><b>SKYBLOCK 7.0</b></h3>
                    <p>(Đã bán: <u><?php echo getCountDown('2', $dbOFF); ?></u> <i class="fas fa-user-md"></i>)</p>
                    <img src="../img/bg3.png" alt="skyblock7" class="img-thumbnail" width="70%">
                </div>
                <strong>Thông tin:</strong>
                <p>- Version file: v7.0 grassmc.com</p>
                <p>- Version ingame: 1.12.2</p>
                <p>- Dung lượng: 166.8MB (zipped)</p>
                <p>- Ngày phát hành: 11/07/2020</p>
                <strong>Thông tin Khác:</strong>
                <p>- File đã config + việt hoá 95%</p>
                <p>- Đã cài các plugin chống hack đơn giản. Chưa cài các plugin phụ như đăng nhập, nạp thẻ, giảm lag...bla</p>
                <p>- Đã chạy thực nghiệm và sữa lỗi</p>
                <p>- Có hỗ trợ fix bug hoặc lỗi khi chạy file</p>
                <strong>SELL:</strong>
                <p>-<span id="filecost">1</span>.0$ <i class="far fa-money-bill-alt" style="color: #1ea645;"></i></p>
                <button type="button" id="buy"><i class="fas fa-shopping-cart"></i> MUA NGAY</button>
                <button type="button" id="review">REVIEW <i class="fas fa-images"></i></button>
            </div>
            <div id="file">
                <input type="hidden" id="fileid" value="3">
                <div class="text-center">
                    <h3 id="filename"><b>SKYBLOCK 7.0 REMAKE</b></h3>
                    <p>(Đã bán: <u><?php echo getCountDown('3', $dbOFF); ?></u> <i class="fas fa-user-md"></i>)</p>
                    <img src="../img/bg3.png" alt="skyblock7pre" class="img-thumbnail" width="70%">
                </div>
                <strong>Thông tin:</strong>
                <p>- Version file: v7.1 grassmc.com</p>
                <p>- Version ingame: 1.12.2</p>
                <p>- Dung lượng: unknow</p>
                <p>- Ngày phát hành: 20/09/2020</p>
                <strong>Thông tin Khác:</strong>
                <p>- File đã config + việt hoá 95%</p>
                <p>- Đã cài các plugin chống hack đơn giản. Và các plugin phụ. Các bạn chỉ việc cài lại cấu hình</p>
                <p>- Đã chạy thực nghiệm và sữa lỗi rất nhiều</p>
                <p>- Có hỗ trợ fix bug hoặc lỗi khi chạy file (nếu có)</p>
                <p>- File được cải tiếng từ bản cũ v7.0 lần đầu ra mắt trước đó đã thu hút rất nhiều người chơi. Phiên bản cải tiến lại này lại là một sự đột phá mới.</p>
                <p>- File thuộc thể loại bán RPG Skyblock</p>
                <strong>SELL:</strong>
                <p>-<span id="filecost">5</span>.0$ <i class="far fa-money-bill-alt" style="color: #1ea645;"></i></p>
                <button type="button" id="buy"><i class="fas fa-shopping-cart"></i> MUA NGAY</button>
                <button type="button" id="review">REVIEW <i class="fas fa-images"></i></button>
            </div>
            <div id="file">
                <input type="hidden" id="fileid" value="4">
                <div class="text-center">
                    <h3 id="filename"><b>TOWNY DIAMOND 2</b></h3>
                    <p>(Đã bán: <u><?php echo getCountDown('4', $dbOFF); ?></u> <i class="fas fa-user-md"></i>)</p>
                    <img src="../img/bg3.png" alt="td2" class="img-thumbnail" width="70%">
                </div>
                <strong>Thông tin:</strong>
                <p>- Version file: cải tiến ver1 cũ (2019)</p>
                <p>- Version ingame: 1.12.2</p>
                <p>- Dung lượng: 76.9MB (folder)</p>
                <p>- Ngày phát hành: 04/05/2020</p>
                <strong>Thông tin Khác:</strong>
                <p>- File đã config + việt hoá 90%</p>
                <p>- World tạo ra rãi rác kim cương khắp mọi nơi. Player sinh tồn farm diamond khắp mọi nơi</p>
                <p>- Đã chạy thực nghiệm và sữa lỗi cơ bản</p>
                <p>- Có hỗ trợ fix bug hoặc lỗi khi chạy file</p>
                <strong>SELL:</strong>
                <p>-<span id="filecost">1</span>.0$ <i class="far fa-money-bill-alt" style="color: #1ea645;"></i></p>
                <button type="button" id="buy"><i class="fas fa-shopping-cart"></i> MUA NGAY</button>
                <button type="button" id="review">REVIEW <i class="fas fa-images"></i></button>
            </div>
            <div id="file">
                <input type="hidden" id="fileid" value="5">
                <div class="text-center">
                    <h3 id="filename"><b>SKYBLOCK HAPPY</b></h3>
                    <p>(Đã bán: <u><?php echo getCountDown('5', $dbOFF); ?></u> <i class="fas fa-user-md"></i>)</p>
                    <img src="../img/bg3.png" alt="sbhappy" class="img-thumbnail" width="70%">
                </div>
                <strong>Thông tin:</strong>
                <p>- Version file: unknow</p>
                <p>- Version ingame: 1.11.2</p>
                <p>- Dung lượng: 80.7MB (zipped)</p>
                <p>- Ngày phát hành: 31/03/2020</p>
                <strong>Thông tin Khác:</strong>
                <p>- File đã config + việt hoá 100%</p>
                <p>- File được share trên mạng, có giá bán 70.000đ</p>
                <p>- Chưa từng chạy thực nghiệm và chưa từng fix lỗi</p>
                <p>- Không hỗ trợ fix bug, lỗi file, lỗi console...vv</p>
                <p>- File còn lỗi khá nhiều và đơn sơ tuy nhiên mình đánh giá là cũng khá hiện đại lúc bấy giờ.</p>
                <strong>SELL:</strong>
                <p>-<span id="filecost">1</span>.0$ <i class="far fa-money-bill-alt" style="color: #1ea645;"></i></p>
                <button type="button" id="buy"><i class="fas fa-shopping-cart"></i> MUA NGAY</button>
                <button type="button" id="review">REVIEW <i class="fas fa-images"></i></button>
            </div>
            <div id="file">
                <input type="hidden" id="fileid" value="6">
                <div class="text-center">
                    <h3 id="filename"><b>SKYBLOCK OUTDATED</b></h3>
                    <p>(Đã bán: <u><?php echo getCountDown('6', $dbOFF); ?></u> <i class="fas fa-user-md"></i>)</p>
                    <img src="../img/bg3.png" alt="opsboutdate" class="img-thumbnail" width="70%">
                </div>
                <strong>Thông tin:</strong>
                <p>- Version file: v1.0 của mineVN.hopto.org</p>
                <p>- Version ingame: 1.11.2</p>
                <p>- Dung lượng: 36.4MB (zipped)</p>
                <p>- Ngày phát hành: 08/04/2020</p>
                <strong>Thông tin Khác:</strong>
                <p>- File đã config + việt hoá 98%</p>
                <p>- File cũ phiên bản cũ đã không còn sử dụng lâu rồi nhưng từng huy hoàng vào thời kỳ cũ</p>
                <p>- File giản đơn không cầu kì phức tạp các bạn có thể tải world hoặc lấy các thứ có thể dùng được.</p>
                <p>- Đã từng chạy thực nghiệm và fix lỗi cơ bản</p>
                <p>- Plugin vẫn còn hoạt động tốt, ko xung đột. Hỗ trợ fix bug, lỗi file, lỗi console...(nếu có)</p>
                <strong>SELL:</strong>
                <p>-<span id="filecost">1</span>.0$ <i class="far fa-money-bill-alt" style="color: #1ea645;"></i></p>
                <button type="button" id="buy"><i class="fas fa-shopping-cart"></i> MUA NGAY</button>
                <button type="button" id="review">REVIEW <i class="fas fa-images"></i></button>
            </div>
            <div id="file">
                <input type="hidden" id="fileid" value="7">
                <div class="text-center">
                    <h3 id="filename"><b>TOWNY NORMAL 1.12.2</b></h3>
                    <p>(Đã bán: <u><?php echo getCountDown('7', $dbOFF); ?></u> <i class="fas fa-user-md"></i>)</p>
                    <img src="../img/bg3.png" alt="townynorm" class="img-thumbnail" width="70%">
                </div>
                <strong>Thông tin:</strong>
                <p>- Version file: v3 (cải tiến từ ver towny diamond cũ)</p>
                <p>- Version ingame: 1.12.2</p>
                <p>- Dung lượng: 36.4MB (zipped)</p>
                <p>- Ngày phát hành: 19/06/2020</p>
                <strong>Thông tin Khác:</strong>
                <p>- File đã config + việt hoá 89%</p>
                <p>- File giản đơn không cầu kì phức tạp các bạn có thể tải world hoặc lấy các thứ có thể dùng được. Đây là file towny cơ bản không còn diamond world như cũ mà là world bình thường.</p>
                <p>- Đã từng chạy thực nghiệm nhưng chưa phát hiện lỗi nào để fix</p>
                <p>- Chưa cài các plugin phụ trợ</p>
                <p>- Plugin vẫn còn hoạt động tốt, ko xung đột. Hỗ trợ fix bug, lỗi file, lỗi console...(nếu có)</p>
                <strong>SELL:</strong>
                <p>-<span id="filecost">1</span>.0$ <i class="far fa-money-bill-alt" style="color: #1ea645;"></i></p>
                <button type="button" id="buy"><i class="fas fa-shopping-cart"></i> MUA NGAY</button>
                <button type="button" id="review">REVIEW <i class="fas fa-images"></i></button>
            </div>
            <div id="file">
                <input type="hidden" id="fileid" value="8">
                <div class="text-center">
                    <h3 id="filename"><b>OP PRISON REVOLUTION</b></h3>
                    <p>(Đã bán: <u><?php echo getCountDown('8', $dbOFF); ?></u> <i class="fas fa-user-md"></i>)</p>
                    <img src="../img/bg3.png" alt="prisonrevo" class="img-thumbnail" width="70%">
                </div>
                <strong>Thông tin:</strong>
                <p>- Version file: thuộc mineVN.hopto.org</p>
                <p>- Version gốc ingame: 1.11.2</p>
                <p>- Dung lượng: 40.4MB (zipped)</p>
                <p>- Ngày phát hành: 01/05/2020</p>
                <strong>Thông tin Khác:</strong>
                <p>- File đã config + việt hoá 99%</p>
                <p>- Mình đã làm khá nhiều file prison nhưng không nhớ file này thuộc loại nào chỉ biết nó cải tiếng từ 2 hoặc 3 phiên bản prison trước</p>
                <p>- Đã từng chạy thực nghiệm và từng fix lỗi bug</p>
                <p>- Chưa cài các plugin phụ trợ</p>
                <p>- Plugin vẫn còn hoạt động tốt, ko xung đột. Hỗ trợ fix bug, lỗi file, lỗi console...(nếu có)</p>
                <p>- Prison gồm 52warp farm đá + 9 warp vip + warp linh tinh.</p>
                <p>- Map build đẹp kết hợp build tay + tải trên mạng.</p>
                <strong>SELL:</strong>
                <p>-<span id="filecost">2</span>.0$ <i class="far fa-money-bill-alt" style="color: #1ea645;"></i></p>
                <button type="button" id="buy"><i class="fas fa-shopping-cart"></i> MUA NGAY</button>
                <button type="button" id="review">REVIEW <i class="fas fa-images"></i></button>
            </div>
            <div id="file">
                <input type="hidden" id="fileid" value="9">
                <div class="text-center">
                    <h3 id="filename"><b>SKY EGG</b></h3>
                    <p>(Đã bán: <u><?php echo getCountDown('9', $dbOFF); ?></u> <i class="fas fa-user-md"></i>)</p>
                    <img src="../img/bg3.png" alt="skyegg" class="img-thumbnail" width="70%">
                </div>
                <strong>Thông tin:</strong>
                <p>- Version file: v1 + thuộc mineVN.hopto.org</p>
                <p>- Version gốc ingame: 1.11.2</p>
                <p>- Dung lượng: 37.7MB (zipped)</p>
                <p>- Ngày phát hành: 19/04/2020</p>
                <strong>Thông tin Khác:</strong>
                <p>- File đã config + việt hoá 90%</p>
                <p>- Là một thể loại game cày cuốc dựa vào vận may đập trứng. Người chơi thu thập trứng và đập hên xui có thể nhận được mãnh hoặc vũ khí tối thượng</p>
                <p>- Đã từng chạy thực nghiệm và từng fix vài lỗi bug nhỏ</p>
                <p>- Chưa cài các plugin phụ trợ</p>
                <p>- Hỗ trợ fix bug, lỗi file, lỗi console...(nếu có)</p>
                <p>- Map tự build tay không quay cóp trên mạng.</p>
                <strong>SELL:</strong>
                <p>-<span id="filecost">1</span>.0$ <i class="far fa-money-bill-alt" style="color: #1ea645;"></i></p>
                <button type="button" id="buy"><i class="fas fa-shopping-cart"></i> MUA NGAY</button>
                <button type="button" id="review">REVIEW <i class="fas fa-images"></i></button>
            </div>
            <div id="file">
                <input type="hidden" id="fileid" value="10">
                <div class="text-center">
                    <h3 id="filename"><b>PRISON 1.15</b></h3>
                    <p>(Đã bán: <u><?php echo getCountDown('10', $dbOFF); ?></u> <i class="fas fa-user-md"></i>)</p>
                    <img src="../img/bg3.png" alt="prison115" class="img-thumbnail" width="70%">
                </div>
                <strong>Thông tin:</strong>
                <p>- Version file: thuộc mineVN.hopto.org</p>
                <p>- Version gốc ingame: 1.15</p>
                <p>- Dung lượng: 107.5MB (zipped)</p>
                <p>- Ngày phát hành: 09/04/2020</p>
                <strong>Thông tin Khác:</strong>
                <p>- File đã config + việt hoá 79%</p>
                <p>- Vẫn là đào đá nhưng lần này là version 1.15</p>
                <p>- Đã từng chạy thực nghiệm và từng fix vài lỗi bug nhỏ</p>
                <p>- Chưa cài các plugin phụ trợ</p>
                <p>- Hỗ trợ fix bug, lỗi file, lỗi console...(nếu có)</p>
                <p>- Map spawn + map warp mạng kết hợp build tay.</p>
                <p>- Có sử dụng 1 vài plugin mới lúc bấy giờ vừa ra phiên bản minecraft 1.15</p>
                <strong>SELL:</strong>
                <p>-<span id="filecost">1</span>.0$ <i class="far fa-money-bill-alt" style="color: #1ea645;"></i></p>
                <button type="button" id="buy"><i class="fas fa-shopping-cart"></i> MUA NGAY</button>
                <button type="button" id="review">REVIEW <i class="fas fa-images"></i></button>
            </div>
            <div id="file">
                <input type="hidden" id="fileid" value="11">
                <div class="text-center">
                    <h3 id="filename"><b>SKYBLOCK VANILLA</b></h3>
                    <p>(Đã bán: <u><?php echo getCountDown('11', $dbOFF); ?></u> <i class="fas fa-user-md"></i>)</p>
                    <img src="../img/bg3.png" alt="sbvani" class="img-thumbnail" width="70%">
                </div>
                <strong>Thông tin:</strong>
                <p>- Version file: grassmc.com</p>
                <p>- Version gốc ingame: 1.12.2</p>
                <p>- Dung lượng: 106.8MB (zipped)</p>
                <p>- Ngày phát hành: 14/04/2022</p>
                <strong>Thông tin Khác:</strong>
                <p>- Chơi như chơi skyblock survival (single play)</p>
                <p>- Có thể chơi cùng bạn</p>
                <p>- Cobblestone Generator được tăng tốc</p>
                <p>- Mới vào spawn sẵn trên đảo</p>
                <p>- Chết mất đồ</p>
                <p>- Không sử dụng plugins</p>
                <p>- Hỗ trợ fix bug, lỗi file, lỗi console...(nếu có)</p>
                <strong>SELL:</strong>
                <p>-<span id="filecost">1</span>.0$ <i class="far fa-money-bill-alt" style="color: #1ea645;"></i></p>
                <button type="button" id="buy"><i class="fas fa-shopping-cart"></i> MUA NGAY</button>
                <button type="button" id="review">REVIEW <i class="fas fa-images"></i></button>
            </div>
        </div>
    </div><!-- end container-fluid -->
</body>
<!-- The Modal -->
<style>
    .modal .modal-content {
        padding: 20px 20px 20px 20px;
        -webkit-animation-name: modal-animation;
        -webkit-animation-duration: 0.5s;
        animation-name: modal-animation;
        animation-duration: 0.5s;
    }
    .modal-footer button{
        width: 45%;
    }
    #filecost{
        width: 10px;
    }
    @-webkit-keyframes modal-animation {
        from {
            top: -100px;
            opacity: 0;
        }
        to {
            top: 0px;
            opacity: 1;
        }
    }       
    @keyframes modal-animation {
        from {
            top: -100px;
            opacity: 0;
        }
        to {
            top: 0px;
            opacity: 1;
        }
    }
</style>
<div class="modal" id="buyconfirm">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post">
                <!-- Modal Header -->
                <div class="modal-header">
                    <div class="alert alert-warning">
                        <strong>Yêu cầu xác nhận!</strong> Vui lòng kiểm tra lại thông tin.
                    </div>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <p><strong>Mã file:</strong> <input type="text" name="fileid"></p>
                    <p><strong>Tên file:</strong> "<input type="text" name="filename">"</p>
                    <p><strong>Giá mua:</strong> -<input type="text" name="filecost" id="filecost">.0$ <i class="far fa-money-bill-alt" style="color: #1ea645;"></i></p>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" name="buyfile">Xác nhận</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                </div>
                <?php include '../ctrl/buyFile.php'; ?>
            </form>
        </div>
    </div>
</div>
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
                        <strong>Bạn chưa đăng nhập!</strong> vào trang login <a href="./login.php" class="alert-link">TẠI ĐÂY <i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                </div>
        </div>
    </div>
</div>
<!-- no enough -->
<div class="modal" id="noenough">
    <div class="modal-dialog">
        <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="alert alert-warning">
                        <strong>Ko đủ chi trả!</strong> Bạn không có chủ tài sản để chi cho hành động vừa rồi.
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Đã hiểu</button>
                </div>
        </div>
    </div>
</div>
<!-- Transaction Success -->
<div class="modal" id="transucc">
    <div class="modal-dialog">
        <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="alert alert-success">
                        <strong>Mua thành công!</strong> Tài nguyên đã được thêm vào túi đồ của bạn, hãy đi kiểm tra.
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Tôi biết rồi</button>
                </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
    $("#username").focus();

    $("#username, #password").keyup(function(){
        $("#wrongsomethings").hide();
    });

    //buy
    $("button#buy").click(function(){
        var filename = $(this).parent("div").find("#filename").text();
        var fileid = $(this).parent("div").children("#fileid").val();
        var filecost = $(this).parent("div").find("#filecost").text();
        $("input[name=fileid]").val(fileid);
        $("input[name=filename]").val(filename);
        $("input[name=filecost]").val(filecost);
        $("#buyconfirm").modal('toggle');
    });
    //

    function alignModal(){
        var modalDialog = $(this).find(".modal-dialog");
        
        // Applying the top margin on modal to align it vertically center
        modalDialog.css("margin-top", Math.max(0, ($(window).height() - modalDialog.height()) / 2));
    }
    // Align modal when it is displayed
    $(".modal").on("shown.bs.modal", alignModal);
    
    // Align modal when user resize the window
    $(window).on("resize", function(){
        $(".modal:visible").each(alignModal);
    });
});
</script>
<?php
    $dbOFF -> close();
?>
</html>