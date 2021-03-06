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
                        <a href="../index.php">Trang ch???</a>
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
                <h1>Xin ch??o, <u><?php echo $_SESSION['username']; ?></u>!</h1><br>
                <h2>????y l?? b???ng ??i???u khi???n (panel) c???a b???n, c?? th??? t??? do ??i???u khi???n c??c t??c v???:</h2>
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
                    <p>-> Xem ho???c ch???nh s???a th??ng tin c?? nh??n</p>
                    <p>(Nh???p v??o)</p>
                </div>
                <div id="inv">
                    <h4>Inventory <i class="fas fa-boxes"></i></h4>
                    <hr>
                    <p>-> T??i v???t ph???m c?? nh??n ch???a ti???n, t??i nguy??n..</p>
                    <p>(Nh???p v??o)</p>
                </div>
                <div id="mbox">
                    <h4>MailBox <i class="fas fa-mail-bulk"></i></h4>
                    <hr>
                    <p>-> H???p tin nh???n, th?? t???, l???i nh???c ?????n b???n</p>
                    <p>(Nh???p v??o)</p>
                </div>
            </div>
            <br>
            <!-- hiden content -->
            <hr class="accessory">
            <style>
                #profile, #inventory, #curr, #mailbox, #newPassword{
                    display: none;
                }
                .accessory {
                    height: 6px;
                    background-image: radial-gradient(
                        closest-side,
                        hsla(0, 0%, 50%, 1.0),
                        hsla(0, 0%, 50%, 0) 100%);
                    position: relative;
                }
                .accessory:after {
                    position: absolute;
                    top:  50%;
                    left: 50%;
                    display:block;
                    background-color: hsl(0, 0%, 75%);
                    height: 12px;
                    width:  12px;
                    transform: rotate(45deg);
                    margin-top:  -10px;
                    margin-left: -10px;
                    border-radius: 4px 0;
                    border: 4px solid hsla(0, 0%, 100%, 0.35);
                    background-clip: padding-box;
                    box-shadow: -10px 10px 0 hsla(0, 0%, 100%, 0.15), 10px -10px 0 hsla(0, 0%, 100%, 0.15);
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
                    <label>Th??nh vi??n th???:</label>
                    <input type="text" class="form-control" name="inpStt" id="inpStt" value="<?php
                        $serials = getSerial($_SESSION['username'], $dbOFF);
                        echo $serials[0];
                    ?>" readonly>
                </div>
                <div class="form-group">
                    <label>M?? ng?????i d??ng:</label>
                    <input type="text" class="form-control" name="inpId" id="inpId" value="<?php
                    if($serials[1] == '')
                        echo '(ch??a v??o game -> ch??a x??c ?????nh)';
                    else 
                        echo $serials[1]; ?>" readonly>
                </div>
                <div class="form-group">
                    <label id="edLabel">Email: <i class="far fa-edit"></i></label>
                    <input type="text" class="form-control" name="inpEmail" id="inpEmail" value="<?php
                        echo $serials[2]; ?>" readonly>
                </div>
                <div class="form-group">
                    <label id="edLabel">S??T: <i class="far fa-edit"></i></label>
                    <input type="text" class="form-control" name="inpPhone" id="inpPhone" value="<?php
                        echo $serials[3]; ?>" readonly>
                </div>
                <hr>
                <div class="form-group">
                    <label id="edLabel">H??? v?? t??n: <i class="far fa-edit"></i></label>
                    <input type="text" class="form-control" name="inpName" id="inpName" value="<?php
                        echo $serials[4]; ?>" readonly>
                </div>
                <div class="form-group">
                    <label id="edLabel">Tu???i: <i class="far fa-edit"></i></label>
                    <input type="text" class="form-control" name="inpAge" id="inpAge" value="<?php
                        echo $serials[5]; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="selSex">Gi???i t??nh: <i class="far fa-edit"></i></label>
                    <select class="form-control" id="selSex" name="selSex">
                        <?php
                            if($serials[6] == '' || $serials[6] == 'Nam'){
                                echo '
                                <option value="Nam" selected="selected">Nam</option>
                                <option value="N???">N???</option>
                                ';
                            } else{
                                echo '
                                <option value="Nam">Nam</option>
                                <option value="N???" selected="selected">N???</option>
                                ';
                            }
                        ?>
                    </select>
                </div>
                <hr>
                <div class="form-group">
                    <label id="edLabel">M???t kh???u hi???n t???i: <i class="far fa-edit"></i></label>
                    <input type="password" class="form-control" name="inpPassword" id="inpPassword" value="*******" readonly>
                </div>
                <div class="form-group" id="newPassword">
                    <label id="edLabel">M???t kh???u m???i: <i class="far fa-edit"></i></label>
                    <input type="password" class="form-control" name="inpNewPassword" id="inpNewPassword">
                </div>
                <button type="submit" class="btn btn-info" name="update">C???p nh???t</button>
                <?php include '../ctrl/updateProfile.php'; ?>
                </form>
            </div>
            <style>
                #inventory{
                    flex-wrap: wrap;
                    border-top-left-radius: 30px;
                    border-top-right-radius: 30px;
                }
                #inventory div{
                    text-align: center;
                    width: 30%;
                    padding: 10px;
                    margin: 0 auto;
                }
                #inventory div a{
                    color: black;
                    font-weight: 900;
                }
                #inventory div:hover{
                    opacity: 0.8;
                    box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
                }
            </style>
            <div id="inventory" class="item">
                <?php include '../ctrl/loadFile.php'; ?>
            </div>
            <div id="mailbox" class="item">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th>T???</th>
                    <th>T???i</th>
                    <th>Ch??? ?????</th>
                    <th>N???i dung</th>
                    <th>H??nh ?????ng</th>
                </tr>
                </thead>
                <tbody>
                <?php include '../ctrl/loadMail.php'; ?>
                </tbody>
            </table>
            </div>
            <!-- currency fizz -->
            <style>
                #curr{
                    position: fixed;
                    bottom: 0;
                    left: 0;
                    width: 100%;
                    background: #eeeee4;
                }
                #curr div{
                    width: 33.3%;
                    margin: auto;
                    padding-top: 20px;
                    text-align: center;
                    font-weight: 900;
                    box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;
                }
                #curr div a{
                    font-weight: 900;
                    color: black;
                }
            </style>
            <div id="curr">
                <div>
                    <img class="rounded-circle" src="../img/token.png" alt="file" width="10%">
                    <br>
                    <p><?php echo getToken($_SESSION['username'], $dbOFF); ?> token</p>
                </div>
                <div>
                    <img class="rounded-circle" src="../img/coin.png" alt="file" width="10%">
                    <br>
                    <p><?php echo getCoin($_SESSION['username'], $dbOFF); ?> coin</p>
                </div>
                <div>
                    <img class="img-thumbnail" src="../img/readme.png" alt="file" width="10%">
                    <br>
                    <a class="btn btn-link" role="button" data-toggle="modal" data-target="#readme-content">readme.txt</a>
                </div>
            </div>
        </div><!--end container-->
    </body>
    <!-- modals -->
    <style>
        .modal-body textarea{
            width: 100%;
            height: 10vh;
        }
        .modal-footer button{
            width: 46.5%;
        }
        .modal .modal-content {
            padding: 20px 20px 20px 20px;
            -webkit-animation-name: modal-animation;
            -webkit-animation-duration: 0.5s;
            animation-name: modal-animation;
            animation-duration: 0.5s;
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
    <!-- Readme content .txt-->
    <div class="modal" id="readme-content">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="alert alert-primary">
                            <strong>1. </strong> B???n ??ang ??? m??n h??nh t??i ????? c?? nh??n<br>
                            <strong>2. </strong> ????? t???i file t??? t??i ????? b???n ch??? c???n click download v??o link v?? x??c nh???n "I'm not robot"<br>
                            <strong>3. </strong> N???u b???n ch??? th???y m???i file readme.txt. Ngh??a l?? b???n ch??a c?? t??i nguy??n n??o trong t??i c???<br>
                            <strong>4. </strong> V???t ph???m mua t??? shop nhinguyen.rf.gd s??? ???????c l??u tr??? t???i ????y
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">???? hi???u</button>
                    </div>
            </div>
        </div>
    </div>
    <!-- confirm deleteMail -->
    <div class="modal" id="delete-mail">
        <div class="modal-dialog">
            <div class="modal-content">
                    <form method="post">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="alert alert-info">
                            <input type="hidden" name="mailid" id="mailid">
                            <strong>X??c nh???n.</strong> B???n c?? ch???c ch???n mu???n xo?? mail n??y ch??? ?
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info" name="deletemail">Xo?? lu??n</button>
                        <button type="button" class="btn btn-light" data-dismiss="modal">Suy ngh?? l???i</button>
                    </div>
                    <?php include '../ctrl/deleteMail.php'; ?>
                    </form>
            </div>
        </div>
    </div>
    <!-- reply Mail -->
    <div class="modal" id="reply-mail">
        <div class="modal-dialog">
            <div class="modal-content">
                    <form method="post">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <div class="form-group">
                            <label for="fromwho">T???:</label>
                            <input type="text" class="form-control" id="fromwho" name="fromwho" readonly>
                        </div>
                        <div class="form-group">
                            <label for="fromwho">T???i:</label>
                            <input type="text" class="form-control" id="towho" name="towho" readonly>
                        </div>
                        <div class="form-group">
                            <label for="fromwho">Ch??? ?????:</label>
                            <input type="text" class="form-control" id="title" name="title" readonly>
                        </div>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="alert alert-info">
                            <strong>N???i dung:</strong><br>
                            <textarea name="content" id="content" required></textarea>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info" name="replymail">Ph???n h???i</button>
                        <button type="button" class="btn btn-light" data-dismiss="modal">Hu??? b???</button>
                    </div>
                    <?php include '../ctrl/replyMail.php'; ?>
                    </form>
            </div>
        </div>
    </div>
    <script>
    $(document).ready(function(){
        //click nut reply mail
        $("button#replymail").click(function(){
            var tdFrom = $(this).parent().parent().find("#tdFrom").text();
            var tdTo = $(this).parent().parent().find("#tdTo").text();
            var tdTitle = $(this).parent().parent().find("#tdTitle").text();
            $("#fromwho").val(tdTo);
            $("#towho").val(tdFrom);
            $("#title").val(tdTitle);
            $("#reply-mail").modal("toggle");
        });
        //click n??t xo?? mail tr??n thanh h??nh ?????ng
        $("button#deletemail").click(function(){
            var idmail = $(this).parent().parent().find("input#idmail").val();
            $("#mailid").val(idmail);
            $("#delete-mail").modal("toggle");
        });

        //profile n??t edit
        $("label#edLabel").click(function(){
            var x = $(this).parent().find("input");
            x.removeAttr("readonly");
            x.val("");
            x.focus();
            $(this).find("i").text(" (editing)");

            var y = $(this).text();
            if(y === "M???t kh???u hi???n t???i:  (editing)"){
                $("#newPassword").show();
            }
        });
        //click t???ng item
        $("#pro").click(function(){
            $(this).css("box-shadow", "rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px");
            $("#inv").css("box-shadow", "unset");
            $("#mbox").css("box-shadow", "unset");
            $("#profile").show();
            $("#inventory").hide();
            $("#curr").hide();
            $("#mailbox").hide();
        });
        $("#inv").click(function(){
            $(this).css("box-shadow", "rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px");
            $("#pro").css("box-shadow", "unset");
            $("#mbox").css("box-shadow", "unset");
            $("#inventory").css("display", "flex");
            $("#curr").css("display", "flex");
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
            $("#curr").hide();
        });

        //resize modal
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
    </html>
<?php
    $dbOFF -> close();
?>