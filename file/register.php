<?php
    include_once '../conn/dbON.php';
    include_once '../conn/dbOFF.php';
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

    <title>nghinguyen.rf.gd | Register</title>
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
                        <li><a href="./shopplugin.php">Shop plugin</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)">T??i kho???n</a>
                    <ul id="sub-menu">
                        <li><a href="javascript:void(0)">????ng k??</a> <i class="fas fa-street-view" style="color: greenyellow;"></i></li>
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
        <!-- Content -->
        <style>
            #formbox{
                background: white;
                width: 50%;
                padding: 10px;
                position: absolute;
                top: 50%; left: 50%;
                transform: translateX(-50%) translateY(-50%);
                border-radius: 10px;
            }
                #formbox ul li{
                    list-style-type: none;
                }
                #label{
                    background: #0a7d3a;
                    font-weight: 900;
                    font-size: 200%;
                    color: whitesmoke;
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
                    width: 99%;
                    background: #13bd5c;
                    color: white;
                    font-size: 150%;
                    font-weight: 800;
                }
                ::placeholder{
                    text-align: center;
                }
                #reg-succ, #reg-exist, #reg-unid, #trueall, #cancel, #register, #wrong-un, #wrong-pw, #wrong-repw, #reg-exist{
                    display: none;
                }
        </style>
        <div class="row" id="content">
            <div class="jumpotron text-center" id="formbox">
                <div id="label">Form ????ng k??</div>
                <div id="formcont">
                    <form action="" method="POST">
                        <div class="alert alert-success" id="reg-succ">
                            <strong>????ng k?? th??nh c??ng!</strong> Gi??? ????y b???n c?? th??? ????ng nh???p <a href="./login.php" class="alert-link"><u>T???I ????Y</u></a> (<span id="reg-succ-num">5</span>)
                        </div>
                        <div class="alert alert-danger" id="reg-unid">
                            <strong>???? x???y ra l???i ko x??c ?????nh, ????ng k?? l???i sau!</strong> (<span id="reg-unid-num">5</span>)
                        </div>
                        <div class="alert alert-danger" id="reg-exist">
                            <strong>T??i kho???n n??y ???? ???????c ????ng k?? tr?????c ????!</strong> (<span id="reg-exist-num">5</span>)
                        </div>

                        <div class="alert alert-success" id="trueall">
                            <strong>???? tho?? c?? ph??p!</strong> Gi??? ????y b???n h??y b???m l???i n??t <u>????NG K??</u>.
                        </div>
                        <div class="alert alert-danger" id="wrong-un">
                            <ul><strong>T??n ????ng nh???p:</strong>
                                <li>Kh??ng ???????c b??? tr???ng, kho???n tr???ng.</li>
                                <li>??t nh???t 3 k?? t???</li>
                                <li>Kh??ng ???????c c?? kt??b.</li>
                            </ul>
                        </div>
                        <input type="text" name="username" id="username" placeholder="Nh???p t??n ????ng nh???p (username)."><br>

                        <div class="alert alert-danger" id="wrong-pw">
                            <ul><strong>M???t kh???u:</strong>
                                <li>Kh??ng ???????c b??? tr???ng.</li>
                                <li>??t nh???t 8 k?? t???</li>
                            </ul>
                        </div>
                        <input type="password" name="password" id="password" placeholder="Nh???p m???t kh???u (password)."><br>
                        
                        <div class="alert alert-danger" id="wrong-repw">
                            <ul><strong>M???t kh???u nh???p l???i:</strong>
                                <li>Kh??ng ???????c b??? tr???ng.</li>
                                <li>Ph???i gi???ng ?? ph??a tr??n</li>
                            </ul>
                        </div>
                        <input type="password" name="repassword" id="repassword" placeholder="Nh???p l???i m???t kh???u"><br>
                        <input type="text" name="email" id="email" placeholder="Nh???p email. (c?? th??? b??? tr???ng)"><br>
                        
                        <button type="button" name="fake" id="fake">????ng k??</button>
                        <button name="register" id="register">????NG K??</button>
                        <button type="button" name="cancel" id="cancel" style="background: #d9d3d2;">HU??? B???</button>
                        <?php include '../ctrl/letRegister.php'; ?>
                        </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
$(document).ready(function(){
    $("#username").focus();

    //regex register
    var isusername, ispassword, isrepassword = false;
    $("#fake").click(function(){
        var regexUN = /^[A-Za-z0-9-_]{3,}$/;
        var un = $("#username").val();
        if(regexUN.test(un))
        {
            isusername = true;
            $("#wrong-un").hide();
        } else{
            isusername = false;
            $("#wrong-un").show();
        }

        var regexPW = /^[A-Za-z0-9!@#$%^&*()_+-[\]]{8,255}$/;
        var pw = $("#password").val();
        if(regexPW.test(pw))
        {
            ispassword = true;
            $("#wrong-pw").hide();
        } else{
            ispassword = false;
            $("#wrong-pw").show();
        }

        var repw = $("#repassword").val();
        var pw = $("#password").val();
        if(repw === pw && repw != "")
        {
            isrepassword = true;
            $("#wrong-repw").hide();
        } else{
            isrepassword = false;
            $("#wrong-repw").show();
        }

        if(isusername == true && ispassword == true && isrepassword == true) {
            $("#register").show();//hi???n n??t real
            $(this).hide();//???n n??t fake
            $("#trueall").show();//b??o click confirm
            $("input").attr("readonly", "readonly");//kho?? edit
            $("#cancel").show();//hi???n cancel
        }
    });
    //cancel register
    $("#cancel").click(function(){
        $("#register").hide();
        $("#fake").show();
        $("#trueall").hide();
        $("input").removeAttr('readonly');
        $(this).hide();
    });

    //H??m reg-exist
});
</script>
<?php
    $dbON -> close();
    $dbOFF -> close();
?>
</html>