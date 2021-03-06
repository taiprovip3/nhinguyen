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
                    <a href="../index.php">Trang ch???</a></i>
                </li>
                <li>
                    <a href="javascript:void(0)">Ph??c l???i</a>
                    <ul id="sub-menu">
                        <li><a href="./muster.php">??i???m danh</a></li>
                        <li><a href="./giftcode.php">Nh???p giftcode</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)">C???a h??ng</a>
                    <ul id="sub-menu">
                        <li><a href="javascript:void(0)">Shop file</a> <i class="fas fa-street-view" style="color: greenyellow;"></i></li>
                        <li><a href="./shopplugin.php">Shop plugin</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)">T??i kho???n</a>
                    <ul id="sub-menu">
                        <li><a href="./register.php">????ng k??</a></li>
                        <li><a href="./login.php">????ng nh???p</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)">Danh m???c kh??c</a>
                    <ul id="sub-menu">
                        <li><a href="./download.html">T???i xu???ng</a></li>
                        <li><a href="./help.html">Tr??? gi??p</a></li>
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
                <span class="badge badge-secondary"><strong><i class="far fa-money-bill-alt" style="color: #1ea645;"></i></strong> <i>c?? th??? nh???n mi???n ph?? b???ng ??i???m danh b???n nh??!</i></span>
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
                    echo "Ch??a login";
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
                    <p>(???? b??n: <u><?php echo getCountDown('0', $dbOFF); ?></u> <i class="fas fa-user-md"></i>)</p>
                    <img src="../img/bg3.png" alt="opskyblockv1" class="img-thumbnail" width="70%">
                </div>
                <strong>Th??ng tin:</strong>
                <p>- Version file: v1.0 vinasky.ga</p>
                <p>- Version ingame: 1.14</p>
                <p>- Dung l?????ng: 166.8MB (zipped)</p>
                <p>- Ng??y ph??t h??nh: 26/09/2021</p>
                <strong>Th??ng tin Kh??c:</strong>
                <p>- File ???? config + vi???t ho?? 88%</p>
                <p>- Ch??a c??i plugin ph??? (nh?? antihack, napthe...vv)</p>
                <p>- File ch??a ch???y th???c nghi???m v?? ch??a ki???m th???</p>
                <p>- C?? h??? tr??? fix bug ho???c l???i khi ch???y file</p>
                <strong>SELL:</strong>
                <p>-<span id="filecost">1</span>.0$ <i class="far fa-money-bill-alt" style="color: #1ea645;"></i></p>
                <button type="button" id="buy"><i class="fas fa-shopping-cart"></i> MUA NGAY</button>
                <button type="button" id="review">REVIEW <i class="fas fa-images"></i></button>
            </div>
            <div id="file">
                <input type="hidden" id="fileid" value="1">
                <div class="text-center">
                    <h3 id="filename"><b>OP SKYBLOCK 2.0</b></h3>
                    <p>(???? b??n: <u><?php echo getCountDown('1', $dbOFF); ?></u> <i class="fas fa-user-md"></i>)</p>
                    <img src="../img/bg3.png" alt="opskyblockv1" class="img-thumbnail" width="70%">
                </div>
                <strong>Th??ng tin:</strong>
                <p>- Version file: v2.0 vinasky.ga</p>
                <p>- Version ingame: 1.14.4</p>
                <p>- Dung l?????ng: 95.8MB (zipped)</p>
                <p>- Ng??y ph??t h??nh: 11/01/2021</p>
                <strong>Th??ng tin Kh??c:</strong>
                <p>- File ???? config + vi???t ho?? 88%</p>
                <p>- Ch??a c??i plugin ph??? (nh?? antihack, napthe...vv)</p>
                <p>- File ch??a ch???y th???c nghi???m v?? ch??a ki???m th???</p>
                <p>- ???????c c???i ti???n t??? ver1</p>
                <p>- C?? h??? tr??? fix bug ho???c l???i khi ch???y file</p>
                <strong>SELL:</strong>
                <p>-<span id="filecost">2</span>.0$ <i class="far fa-money-bill-alt" style="color: #1ea645;"></i></p>
                <button type="button" id="buy"><i class="fas fa-shopping-cart"></i> MUA NGAY</button>
                <button type="button" id="review">REVIEW <i class="fas fa-images"></i></button>
            </div>
            <div id="file">
                <input type="hidden" id="fileid" value="2">
                <div class="text-center">
                    <h3 id="filename"><b>SKYBLOCK 7.0</b></h3>
                    <p>(???? b??n: <u><?php echo getCountDown('2', $dbOFF); ?></u> <i class="fas fa-user-md"></i>)</p>
                    <img src="../img/bg3.png" alt="skyblock7" class="img-thumbnail" width="70%">
                </div>
                <strong>Th??ng tin:</strong>
                <p>- Version file: v7.0 grassmc.com</p>
                <p>- Version ingame: 1.12.2</p>
                <p>- Dung l?????ng: 166.8MB (zipped)</p>
                <p>- Ng??y ph??t h??nh: 11/07/2020</p>
                <strong>Th??ng tin Kh??c:</strong>
                <p>- File ???? config + vi???t ho?? 95%</p>
                <p>- ???? c??i c??c plugin ch???ng hack ????n gi???n. Ch??a c??i c??c plugin ph??? nh?? ????ng nh???p, n???p th???, gi???m lag...bla</p>
                <p>- ???? ch???y th???c nghi???m v?? s???a l???i</p>
                <p>- C?? h??? tr??? fix bug ho???c l???i khi ch???y file</p>
                <strong>SELL:</strong>
                <p>-<span id="filecost">1</span>.0$ <i class="far fa-money-bill-alt" style="color: #1ea645;"></i></p>
                <button type="button" id="buy"><i class="fas fa-shopping-cart"></i> MUA NGAY</button>
                <button type="button" id="review">REVIEW <i class="fas fa-images"></i></button>
            </div>
            <div id="file">
                <input type="hidden" id="fileid" value="3">
                <div class="text-center">
                    <h3 id="filename"><b>SKYBLOCK 7.0 REMAKE</b></h3>
                    <p>(???? b??n: <u><?php echo getCountDown('3', $dbOFF); ?></u> <i class="fas fa-user-md"></i>)</p>
                    <img src="../img/bg3.png" alt="skyblock7pre" class="img-thumbnail" width="70%">
                </div>
                <strong>Th??ng tin:</strong>
                <p>- Version file: v7.1 grassmc.com</p>
                <p>- Version ingame: 1.12.2</p>
                <p>- Dung l?????ng: unknow</p>
                <p>- Ng??y ph??t h??nh: 20/09/2020</p>
                <strong>Th??ng tin Kh??c:</strong>
                <p>- File ???? config + vi???t ho?? 95%</p>
                <p>- ???? c??i c??c plugin ch???ng hack ????n gi???n. V?? c??c plugin ph???. C??c b???n ch??? vi???c c??i l???i c???u h??nh</p>
                <p>- ???? ch???y th???c nghi???m v?? s???a l???i r???t nhi???u</p>
                <p>- C?? h??? tr??? fix bug ho???c l???i khi ch???y file (n???u c??)</p>
                <p>- File ???????c c???i ti???ng t??? b???n c?? v7.0 l???n ?????u ra m???t tr?????c ???? ???? thu h??t r???t nhi???u ng?????i ch??i. Phi??n b???n c???i ti???n l???i n??y l???i l?? m???t s??? ?????t ph?? m???i.</p>
                <p>- File thu???c th??? lo???i b??n RPG Skyblock</p>
                <strong>SELL:</strong>
                <p>-<span id="filecost">5</span>.0$ <i class="far fa-money-bill-alt" style="color: #1ea645;"></i></p>
                <button type="button" id="buy"><i class="fas fa-shopping-cart"></i> MUA NGAY</button>
                <button type="button" id="review">REVIEW <i class="fas fa-images"></i></button>
            </div>
            <div id="file">
                <input type="hidden" id="fileid" value="4">
                <div class="text-center">
                    <h3 id="filename"><b>TOWNY DIAMOND 2</b></h3>
                    <p>(???? b??n: <u><?php echo getCountDown('4', $dbOFF); ?></u> <i class="fas fa-user-md"></i>)</p>
                    <img src="../img/bg3.png" alt="td2" class="img-thumbnail" width="70%">
                </div>
                <strong>Th??ng tin:</strong>
                <p>- Version file: c???i ti???n ver1 c?? (2019)</p>
                <p>- Version ingame: 1.12.2</p>
                <p>- Dung l?????ng: 76.9MB (folder)</p>
                <p>- Ng??y ph??t h??nh: 04/05/2020</p>
                <strong>Th??ng tin Kh??c:</strong>
                <p>- File ???? config + vi???t ho?? 90%</p>
                <p>- World t???o ra r??i r??c kim c????ng kh???p m???i n??i. Player sinh t???n farm diamond kh???p m???i n??i</p>
                <p>- ???? ch???y th???c nghi???m v?? s???a l???i c?? b???n</p>
                <p>- C?? h??? tr??? fix bug ho???c l???i khi ch???y file</p>
                <strong>SELL:</strong>
                <p>-<span id="filecost">1</span>.0$ <i class="far fa-money-bill-alt" style="color: #1ea645;"></i></p>
                <button type="button" id="buy"><i class="fas fa-shopping-cart"></i> MUA NGAY</button>
                <button type="button" id="review">REVIEW <i class="fas fa-images"></i></button>
            </div>
            <div id="file">
                <input type="hidden" id="fileid" value="5">
                <div class="text-center">
                    <h3 id="filename"><b>SKYBLOCK HAPPY</b></h3>
                    <p>(???? b??n: <u><?php echo getCountDown('5', $dbOFF); ?></u> <i class="fas fa-user-md"></i>)</p>
                    <img src="../img/bg3.png" alt="sbhappy" class="img-thumbnail" width="70%">
                </div>
                <strong>Th??ng tin:</strong>
                <p>- Version file: unknow</p>
                <p>- Version ingame: 1.11.2</p>
                <p>- Dung l?????ng: 80.7MB (zipped)</p>
                <p>- Ng??y ph??t h??nh: 31/03/2020</p>
                <strong>Th??ng tin Kh??c:</strong>
                <p>- File ???? config + vi???t ho?? 100%</p>
                <p>- File ???????c share tr??n m???ng, c?? gi?? b??n 70.000??</p>
                <p>- Ch??a t???ng ch???y th???c nghi???m v?? ch??a t???ng fix l???i</p>
                <p>- Kh??ng h??? tr??? fix bug, l???i file, l???i console...vv</p>
                <p>- File c??n l???i kh?? nhi???u v?? ????n s?? tuy nhi??n m??nh ????nh gi?? l?? c??ng kh?? hi???n ?????i l??c b???y gi???.</p>
                <strong>SELL:</strong>
                <p>-<span id="filecost">1</span>.0$ <i class="far fa-money-bill-alt" style="color: #1ea645;"></i></p>
                <button type="button" id="buy"><i class="fas fa-shopping-cart"></i> MUA NGAY</button>
                <button type="button" id="review">REVIEW <i class="fas fa-images"></i></button>
            </div>
            <div id="file">
                <input type="hidden" id="fileid" value="6">
                <div class="text-center">
                    <h3 id="filename"><b>SKYBLOCK OUTDATED</b></h3>
                    <p>(???? b??n: <u><?php echo getCountDown('6', $dbOFF); ?></u> <i class="fas fa-user-md"></i>)</p>
                    <img src="../img/bg3.png" alt="opsboutdate" class="img-thumbnail" width="70%">
                </div>
                <strong>Th??ng tin:</strong>
                <p>- Version file: v1.0 c???a mineVN.hopto.org</p>
                <p>- Version ingame: 1.11.2</p>
                <p>- Dung l?????ng: 36.4MB (zipped)</p>
                <p>- Ng??y ph??t h??nh: 08/04/2020</p>
                <strong>Th??ng tin Kh??c:</strong>
                <p>- File ???? config + vi???t ho?? 98%</p>
                <p>- File c?? phi??n b???n c?? ???? kh??ng c??n s??? d???ng l??u r???i nh??ng t???ng huy ho??ng v??o th???i k??? c??</p>
                <p>- File gi???n ????n kh??ng c???u k?? ph???c t???p c??c b???n c?? th??? t???i world ho???c l???y c??c th??? c?? th??? d??ng ???????c.</p>
                <p>- ???? t???ng ch???y th???c nghi???m v?? fix l???i c?? b???n</p>
                <p>- Plugin v???n c??n ho???t ?????ng t???t, ko xung ?????t. H??? tr??? fix bug, l???i file, l???i console...(n???u c??)</p>
                <strong>SELL:</strong>
                <p>-<span id="filecost">1</span>.0$ <i class="far fa-money-bill-alt" style="color: #1ea645;"></i></p>
                <button type="button" id="buy"><i class="fas fa-shopping-cart"></i> MUA NGAY</button>
                <button type="button" id="review">REVIEW <i class="fas fa-images"></i></button>
            </div>
            <div id="file">
                <input type="hidden" id="fileid" value="7">
                <div class="text-center">
                    <h3 id="filename"><b>TOWNY NORMAL 1.12.2</b></h3>
                    <p>(???? b??n: <u><?php echo getCountDown('7', $dbOFF); ?></u> <i class="fas fa-user-md"></i>)</p>
                    <img src="../img/bg3.png" alt="townynorm" class="img-thumbnail" width="70%">
                </div>
                <strong>Th??ng tin:</strong>
                <p>- Version file: v3 (c???i ti???n t??? ver towny diamond c??)</p>
                <p>- Version ingame: 1.12.2</p>
                <p>- Dung l?????ng: 36.4MB (zipped)</p>
                <p>- Ng??y ph??t h??nh: 19/06/2020</p>
                <strong>Th??ng tin Kh??c:</strong>
                <p>- File ???? config + vi???t ho?? 89%</p>
                <p>- File gi???n ????n kh??ng c???u k?? ph???c t???p c??c b???n c?? th??? t???i world ho???c l???y c??c th??? c?? th??? d??ng ???????c. ????y l?? file towny c?? b???n kh??ng c??n diamond world nh?? c?? m?? l?? world b??nh th?????ng.</p>
                <p>- ???? t???ng ch???y th???c nghi???m nh??ng ch??a ph??t hi???n l???i n??o ????? fix</p>
                <p>- Ch??a c??i c??c plugin ph??? tr???</p>
                <p>- Plugin v???n c??n ho???t ?????ng t???t, ko xung ?????t. H??? tr??? fix bug, l???i file, l???i console...(n???u c??)</p>
                <strong>SELL:</strong>
                <p>-<span id="filecost">1</span>.0$ <i class="far fa-money-bill-alt" style="color: #1ea645;"></i></p>
                <button type="button" id="buy"><i class="fas fa-shopping-cart"></i> MUA NGAY</button>
                <button type="button" id="review">REVIEW <i class="fas fa-images"></i></button>
            </div>
            <div id="file">
                <input type="hidden" id="fileid" value="8">
                <div class="text-center">
                    <h3 id="filename"><b>OP PRISON REVOLUTION</b></h3>
                    <p>(???? b??n: <u><?php echo getCountDown('8', $dbOFF); ?></u> <i class="fas fa-user-md"></i>)</p>
                    <img src="../img/bg3.png" alt="prisonrevo" class="img-thumbnail" width="70%">
                </div>
                <strong>Th??ng tin:</strong>
                <p>- Version file: thu???c mineVN.hopto.org</p>
                <p>- Version g???c ingame: 1.11.2</p>
                <p>- Dung l?????ng: 40.4MB (zipped)</p>
                <p>- Ng??y ph??t h??nh: 01/05/2020</p>
                <strong>Th??ng tin Kh??c:</strong>
                <p>- File ???? config + vi???t ho?? 99%</p>
                <p>- M??nh ???? l??m kh?? nhi???u file prison nh??ng kh??ng nh??? file n??y thu???c lo???i n??o ch??? bi???t n?? c???i ti???ng t??? 2 ho???c 3 phi??n b???n prison tr?????c</p>
                <p>- ???? t???ng ch???y th???c nghi???m v?? t???ng fix l???i bug</p>
                <p>- Ch??a c??i c??c plugin ph??? tr???</p>
                <p>- Plugin v???n c??n ho???t ?????ng t???t, ko xung ?????t. H??? tr??? fix bug, l???i file, l???i console...(n???u c??)</p>
                <p>- Prison g???m 52warp farm ???? + 9 warp vip + warp linh tinh.</p>
                <p>- Map build ?????p k???t h???p build tay + t???i tr??n m???ng.</p>
                <strong>SELL:</strong>
                <p>-<span id="filecost">2</span>.0$ <i class="far fa-money-bill-alt" style="color: #1ea645;"></i></p>
                <button type="button" id="buy"><i class="fas fa-shopping-cart"></i> MUA NGAY</button>
                <button type="button" id="review">REVIEW <i class="fas fa-images"></i></button>
            </div>
            <div id="file">
                <input type="hidden" id="fileid" value="9">
                <div class="text-center">
                    <h3 id="filename"><b>SKY EGG</b></h3>
                    <p>(???? b??n: <u><?php echo getCountDown('9', $dbOFF); ?></u> <i class="fas fa-user-md"></i>)</p>
                    <img src="../img/bg3.png" alt="skyegg" class="img-thumbnail" width="70%">
                </div>
                <strong>Th??ng tin:</strong>
                <p>- Version file: v1 + thu???c mineVN.hopto.org</p>
                <p>- Version g???c ingame: 1.11.2</p>
                <p>- Dung l?????ng: 37.7MB (zipped)</p>
                <p>- Ng??y ph??t h??nh: 19/04/2020</p>
                <strong>Th??ng tin Kh??c:</strong>
                <p>- File ???? config + vi???t ho?? 90%</p>
                <p>- L?? m???t th??? lo???i game c??y cu???c d???a v??o v???n may ?????p tr???ng. Ng?????i ch??i thu th???p tr???ng v?? ?????p h??n xui c?? th??? nh???n ???????c m??nh ho???c v?? kh?? t???i th?????ng</p>
                <p>- ???? t???ng ch???y th???c nghi???m v?? t???ng fix v??i l???i bug nh???</p>
                <p>- Ch??a c??i c??c plugin ph??? tr???</p>
                <p>- H??? tr??? fix bug, l???i file, l???i console...(n???u c??)</p>
                <p>- Map t??? build tay kh??ng quay c??p tr??n m???ng.</p>
                <strong>SELL:</strong>
                <p>-<span id="filecost">1</span>.0$ <i class="far fa-money-bill-alt" style="color: #1ea645;"></i></p>
                <button type="button" id="buy"><i class="fas fa-shopping-cart"></i> MUA NGAY</button>
                <button type="button" id="review">REVIEW <i class="fas fa-images"></i></button>
            </div>
            <div id="file">
                <input type="hidden" id="fileid" value="10">
                <div class="text-center">
                    <h3 id="filename"><b>PRISON 1.15</b></h3>
                    <p>(???? b??n: <u><?php echo getCountDown('10', $dbOFF); ?></u> <i class="fas fa-user-md"></i>)</p>
                    <img src="../img/bg3.png" alt="prison115" class="img-thumbnail" width="70%">
                </div>
                <strong>Th??ng tin:</strong>
                <p>- Version file: thu???c mineVN.hopto.org</p>
                <p>- Version g???c ingame: 1.15</p>
                <p>- Dung l?????ng: 107.5MB (zipped)</p>
                <p>- Ng??y ph??t h??nh: 09/04/2020</p>
                <strong>Th??ng tin Kh??c:</strong>
                <p>- File ???? config + vi???t ho?? 79%</p>
                <p>- V???n l?? ????o ???? nh??ng l???n n??y l?? version 1.15</p>
                <p>- ???? t???ng ch???y th???c nghi???m v?? t???ng fix v??i l???i bug nh???</p>
                <p>- Ch??a c??i c??c plugin ph??? tr???</p>
                <p>- H??? tr??? fix bug, l???i file, l???i console...(n???u c??)</p>
                <p>- Map spawn + map warp m???ng k???t h???p build tay.</p>
                <p>- C?? s??? d???ng 1 v??i plugin m???i l??c b???y gi??? v???a ra phi??n b???n minecraft 1.15</p>
                <strong>SELL:</strong>
                <p>-<span id="filecost">1</span>.0$ <i class="far fa-money-bill-alt" style="color: #1ea645;"></i></p>
                <button type="button" id="buy"><i class="fas fa-shopping-cart"></i> MUA NGAY</button>
                <button type="button" id="review">REVIEW <i class="fas fa-images"></i></button>
            </div>
            <div id="file">
                <input type="hidden" id="fileid" value="11">
                <div class="text-center">
                    <h3 id="filename"><b>SKYBLOCK VANILLA</b></h3>
                    <p>(???? b??n: <u><?php echo getCountDown('11', $dbOFF); ?></u> <i class="fas fa-user-md"></i>)</p>
                    <img src="../img/bg3.png" alt="sbvani" class="img-thumbnail" width="70%">
                </div>
                <strong>Th??ng tin:</strong>
                <p>- Version file: grassmc.com</p>
                <p>- Version g???c ingame: 1.12.2</p>
                <p>- Dung l?????ng: 106.8MB (zipped)</p>
                <p>- Ng??y ph??t h??nh: 14/04/2022</p>
                <strong>Th??ng tin Kh??c:</strong>
                <p>- Ch??i nh?? ch??i skyblock survival (single play)</p>
                <p>- C?? th??? ch??i c??ng b???n</p>
                <p>- Cobblestone Generator ???????c t??ng t???c</p>
                <p>- M???i v??o spawn s???n tr??n ?????o</p>
                <p>- Ch???t m???t ?????</p>
                <p>- Kh??ng s??? d???ng plugins</p>
                <p>- H??? tr??? fix bug, l???i file, l???i console...(n???u c??)</p>
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
                        <strong>Y??u c???u x??c nh???n!</strong> Vui l??ng ki???m tra l???i th??ng tin.
                    </div>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <p><strong>M?? file:</strong> <input type="text" name="fileid"></p>
                    <p><strong>T??n file:</strong> "<input type="text" name="filename">"</p>
                    <p><strong>Gi?? mua:</strong> -<input type="text" name="filecost" id="filecost">.0$ <i class="far fa-money-bill-alt" style="color: #1ea645;"></i></p>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" name="buyfile">X??c nh???n</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">????ng</button>
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
                        <strong>B???n ch??a ????ng nh???p!</strong> v??o trang login <a href="./login.php" class="alert-link">T???I ????Y <i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">????ng</button>
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
                        <strong>Ko ????? chi tr???!</strong> B???n kh??ng c?? ch??? t??i s???n ????? chi cho h??nh ?????ng v???a r???i.
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">???? hi???u</button>
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
                        <strong>Mua th??nh c??ng!</strong> T??i nguy??n ???? ???????c th??m v??o t??i ????? c???a b???n, h??y ??i ki???m tra.
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">T??i bi???t r???i</button>
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