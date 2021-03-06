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
                border-radius: 3px;
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
                border-radius: 3px;
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
                        <li><a href="./shopfile.php">Shop file</a></li>
                        <li><a href="javascript:void(0)">Shop plugin</a> <i class="fas fa-street-view" style="color: greenyellow;"></i></li>
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
                <li><i class="fas fa-coins" style="color: #dbcb2e;"></i>: <span id="coin"><?php
                if(isset($_SESSION['username'])){
                    echo getCoin($_SESSION['username'], $dbOFF);
                }
                ?></span></li>
            </ul>
        </div>
        <hr>
        <!-- content -->
        <style>
            #onebox {
                background: white;
                padding: 10px;
                line-height: 140%;
            }
            .fas {
                color: #42f5bf;
            }
            #onebox button{
                width: 100%;
            }
            #onebox h3{
                font-weight: 900;
                text-align: center;
            }
            #onebox ul li{
                padding: 10px;
                list-style-type: square;
                line-height: 80%;
            }
        </style>
        <div class="row" id="content">
            <div class="col-sm-4" id="onebox">
                <h3>Holo Damage #<span id="plid">0</span></h3>
                <p>M?? t???: ????nh mobs/player hi???n ra l?????ng s??t th????ng g??y ra tr??n ?????i t?????ng. Vd: -5<i class="fas fa-heart"></i></p>
                <ul>T??nh n??ng kh??c:
                    <li>Hi???n hi???u ???ng & ph???m vi hi???u ???ng khi ????nh</li>
                    <li>Thanh m??u ?????ch hi???n l??n thanh BossBar ho???c ActionBar (thanh d?????i tim)</li>
                    <li>Custom m??u s???c, bi???u t?????ng m??u, thanh m??u</li>
                    <li>...</li>
                </ul>
                <video src="https://res.cloudinary.com/dopzctbyo/video/upload/v1649588237/IMG-0440_a8yiao.mp4" controls loop autoplay muted width="100%"></video>
                <p>Gi?? b??n: <span id="plcost">5</span> token <i class="fas fa-money-bill-alt"></i> (no refund)</p>
                <button type="button" class="btn btn-primary btn-lg" id="buy">MUA NGAY</button>
            </div>
            <div class="col-sm-4" id="onebox">
                <h3>Message BossBar #<span id="plid">1</span></h3>
                <p>M?? t???: t???o v??ng l???p l???i nh???c lu??n thay ?????i hi???n tr??n thanh bossbar <i class="fas fa-bars"></i></p>
                <ul>T??nh n??ng kh??c:
                    <li>Th??ng b??o tin nh???n t???c th?? b???ng bossbar</li>
                    <li>T???o v??ng l???p message chatbox nh?? TIPs ho???c ch?? ??</li>
                    <li>Custom join/leave/fistjoin tin nh???n khi ai ???? v??o server</li>
                    <li>...</li>
                </ul>
                <video src="https://res.cloudinary.com/dopzctbyo/video/upload/v1649588237/IMG-0440_a8yiao.mp4" controls loop autoplay muted width="100%"></video>
                <p>Gi?? b??n: <span id="plcost">5</span> token <i class="fas fa-money-bill-alt"></i> (no refund)</p>
                <button type="button" class="btn btn-primary btn-lg" id="buy">MUA NGAY</button>
            </div>
            <div class="col-sm-4" id="onebox">
                <h3>Auto nh???t block #<span id="plid">2</span></h3>
                <p>M?? t???: block t??? ?????ng chui v??o t??i E khi farm. Th?????ng d??ng trong prison <i class="fas fa-funnel-dollar"></i></p>
                <ul>T??nh n??ng kh??c:
                    <li>Gia t??i blocks (kh???i & qu???ng)</li>
                    <li>T??? nung ore khi ????o</li>
                    <li>T??? craft block khi ????? s?? trong t??i E</li>
                    <li>...</li>
                </ul>
                <video src="https://res.cloudinary.com/dopzctbyo/video/upload/v1649588237/IMG-0440_a8yiao.mp4" controls loop autoplay muted width="100%"></video>
                <p>Gi?? b??n: <span id="plcost">5</span> token <i class="fas fa-money-bill-alt"></i> (no refund)</p>
                <button type="button" class="btn btn-primary btn-lg" id="buy">MUA NGAY</button>
            </div>

            <div class="col-sm-4">
            <h3>Column 3</h3>
            <p>Lorem ipsum dolor..</p>
            </div>
            
        </div>
    </div>
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
    #inputcost{
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
                    <p><strong>M?? plugin:</strong> <input type="text" name="plid"></p>
                    <p><strong>T??n plugin:</strong> "<input type="text" name="plname">"</p>
                    <p><strong>Gi?? mua:</strong> -<input type="text" name="plcost" id="inputcost">.0$ <i class="far fa-money-bill-alt" style="color: #1ea645;"></i></p>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" name="buyplugin">X??c nh???n</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">????ng</button>
                </div>
                <?php include '../ctrl/buyPlugin.php'; ?>
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
    $("#username, #password").keyup(function(){
        $("#wrongsomethings").hide();
    });

    //buy
    $("button#buy").click(function(){
        var plid = $(this).parent("div").find("span#plid").text();
        var plname = $(this).parent("div").find("h3").text();
        var plcost = $(this).parent("div").find("span#plcost").text();
        $("input[name=plid]").val(plid);
        $("input[name=plname]").val(plname);
        $("input[name=plcost]").val(plcost);
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