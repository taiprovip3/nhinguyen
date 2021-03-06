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
                        <a href="../index.php">Trang ch???</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Ph??c l???i</a>
                        <ul id="sub-menu">
                            <li><a href="./muster.php">??i???m danh</a></li>
                            <li><a href="javascript:void(0)">Nh???p giftcode</a> <i class="fas fa-street-view" style="color: greenyellow;"></i></li>
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
                        echo "<p id='logged'>(trang c?? nh??n)</p>
                            <form action='../ctrl/letLogout.php' method='post'>
                                <input type='text' name='dirname' value='../index.php'>
                                <button class='btn btn-warning btn-xs' name='logout'>????ng xu???t</button>
                            </form>
                            ";
                    else
                        echo "<p>(ch??a ????ng nh???p)</p>";
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
                    <h1>Nh???p m?? code:</h1>
                    <br>
                    <input type="text" name="inpcodebin" id="inpcodebin" required>
                    <br>
                    <button name="getCode" type="submit">X??c nh???n</button>
                    <?php include '../ctrl/getCode.php'; ?>
                </form>
            </div>
            <br><br><br>
            <h1 id="spoiltitle"><i class="fas fa-gifts" style="color: green;"></i>C??c event c?? th??? nh???n Giftcode<i class="fas fa-donate" style="color: gold;"></i></h1>
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
            <form method="post">
                <input type="hidden" name="nameEvent" id="nameEvent">
            <div class="row" id="spoil">
                <div>
                    <input type="hidden" value="gthv">
                    <h3>GI??? T??? H??NG V????NG</h3>
                    <p>- ????y l?? ng??y h???i truy???n th???ng c???a Ng?????i Vi???t t?????ng nh??? c??ng lao d???ng n?????c c???a H??ng V????ng. Nghi l??? truy???n th???ng ???????c t??? ch???c h??ng n??m v??o m??ng 10 th??ng 3 ??m l???ch</p>
                    <p>- Gi??? t??? H??ng V????ng ti???ng anh l?? The Death anniversary of the Hung Kings</p>
                    <button class="btn btn-primary" name="checkcode">Check giftcode</button>
                </div>
                <div>
                    <input type="hidden" value="ntn">
                    <h3>NG??Y TH???NG NH???T</h3>
                    <p>- Ng??y l??? 30 th??ng 4, t??n ch??nh th???c l?? Ng??y Gi???i ph??ng (ho??n to??n) mi???n Nam, th???ng nh???t ?????t n?????c, Ng??y Chi???n th???ng, Ng??y Th???ng nh???t l?? m???t ng??y l??? qu???c gia c???a Vi???t Nam, ????nh d???u s??? ki???n ch???m d???t kh??ng chi???n ch???ng M??? c???u n?????c khi T???ng th???ng D????ng V??n Minh v?? Th??? t?????ng V?? V??n M???u c???a ch??nh th??? Vi???t Nam C???ng h??a tuy??n b??? ?????u h??ng v?? ??i???u ki???n Ch??nh ph??? C??ch m???ng l??m th???i C???ng h??a mi???n Nam Vi???t Nam v??o tr??a ng??y 30 th??ng 4 n??m 1975</p>
                    <button class="btn btn-primary" name="checkcode">Check giftcode</button>
                </div>
                <div>
                    <input type="hidden" value="lqk">
                    <h3>L??? QU???C KH??NH</h3>
                    <p>- L?? ng??y l??? ch??nh th???c c???a Vi???t Nam, di???n ra v??o ng??y 2 th??ng 9 h???ng n??m, k??? ni???m ng??y Ch??? t???ch H??? Ch?? Minh ?????c b???n Tuy??n ng??n ?????c l???p t???i Qu???ng tr?????ng Ba ????nh, H?? N???i, khai sinh ra n?????c Vi???t Nam D??n ch??? C???ng h??a, m???t trong c??c ti???n th??n c???a n?????c C???ng h??a X?? h???i Ch??? ngh??a Vi???t Nam ng??y nay</p>
                    <button class="btn btn-primary" name="checkcode">Check giftcode</button>
                </div>
                <div>
                    <input type="hidden" value="qtld">
                    <h3>QU???C T??? LAO ?????NG</h3>
                    <p>- L?? ng??y l??? k??? ni???m c???a phong tr??o c??ng nh??n qu???c t??? v?? c???a ng?????i lao ?????ng v??o ng??y 1 th??ng 5 h???ng n??m, t???i nhi???u qu???c gia tr??n th??? gi???i, th?????ng c?? c??c cu???c bi???u t??nh tr??n ???????ng ph??? c???a h??ng tri???u ng?????i lao ?????ng v?? c??c t??? ch???c c??ng ??o??n c???a h???.</p>
                    <button class="btn btn-primary" name="checkcode">Check giftcode</button>
                </div>
                <div>
                    <input type="hidden" value="tnd">
                    <h3>T???T NGUY??N ????N</h3>
                    <p>- L?? d???p l??? ?????u n??m m???i theo ??m l???ch c???a c??c d??n t???c thu???c V??ng v??n h??a ????ng ??, g???m c?? Trung Qu???c, Nh???t B???n, b??n ?????o Tri???u Ti??n, ????i Loan v?? Vi???t Nam</p>
                    <button class="btn btn-primary" name="checkcode">Check giftcode</button>
                </div>
                <div>
                    <input type="hidden" value="tdl">
                    <h3>T???T D????NG L???CH</h3>
                    <p>- L?? m???t ng??y l??? di???n ra v??o ng??y 1 th??ng 1, ng??y ?????u ti??n trong n??m theo l???ch Gregorius c??ng nh?? l???ch Julius, l?? d???p l??? quan tr???ng trong n??m c???a nhi???u d??n t???c v?? n???n v??n h??a tr??n th??? gi???i</p>
                    <button class="btn btn-primary" name="checkcode">Check giftcode</button>
                </div>
            </div>
            <?php include '../ctrl/checkCode.php'; ?>
            </form>
        </div><!--end container-->
    </body>
    <!-- modals -->
    <style>
        .modal .modal-content {
        padding: 20px 20px 20px 20px;
        -webkit-animation-name: modal-animation;
        -webkit-animation-duration: 0.5s;
        animation-name: modal-animation;
        animation-duration: 0.5s;
        }

        .modal-footer button{
            width: 50%;
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
                            <strong>B???n ch??a ????ng nh???p!</strong> c???n bi???t b???n l?? ai m???i c?? th??? b??nh lu???n, v??o trang login <a href="./login.php" class="alert-link">T???I ????Y <i class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">????ng</button>
                    </div>
            </div>
        </div>
    </div>
    <!-- found code -->
    <div class="modal" id="codefound">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="alert alert-primary">
                            <span class="badge badge-success">???? t??m th???y!</span><br>
                            <strong>S??? ki???n: </strong><span id="rsck-codeid"></span><br>
                            <input type="hidden" name="hidden-codebin" id="hidden-codebin">
                            <strong>M?? code: </strong><span id="rsck-codebin"></span><br>
                            <strong>Hi???u l???c: </strong><span id="rsck-enday"></span><br>
                            <strong>T??c v???: </strong><br>
                            <button class="btn btn-success" type="button" id="copycode"><span id="nocop">Copy m?? code n??y</span><span id="copied" style="display: none;"><i class="fas fa-check-circle"> ???? l??u v??o b??? nh??? t???m</i></span></button>
                            <button class="btn btn-success" type="submit" name="savecode">L??u code v??? Mailbox</button>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">???? hi???u</button>
                    </div>
                    <?php include '../ctrl/saveCode.php'; ?>
                </form>
            </div>
        </div>
    </div>
    <!-- no coming -->
    <div class="modal" id="nocoming">
        <div class="modal-dialog">
            <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-warning">
                            <strong>Coming soon!</strong> s??? ki???n n??y ch??a di???n ra (ch??a ph??t h??nh) ho???c ???? qu?? h???n. Vui l??ng li??n h??? tr???c ti???p administrator ????? nh???n ???????c s??? h?????ng d???n chi ti???t.
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">???? hi???u r???i</button>
                    </div>
            </div>
        </div>
    </div>
    <!-- save succ -->
    <div class="modal" id="savesucc">
        <div class="modal-dialog">
            <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-success">
                            <strong>Th??nh c??ng</strong> l??u m?? code v??? mailbox c?? nh??n c???a b???n. ?????n ki???m tra <a href="./panel.php" class="btn btn-success btn-xs" role="button">T???I ????Y <i class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">???? hi???u</button>
                    </div>
            </div>
        </div>
    </div>
    <!-- code used -->
    <div class="modal" id="codeused">
        <div class="modal-dialog">
            <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-warning">
                            <strong>???? s??? d???ng!</strong> B???n ???? s??? d???ng code n??y t??? tr?????c ???? r???i. Vui l??ng ch??? ?????t sau.
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">???? hi???u</button>
                    </div>
            </div>
        </div>
    </div>
    <!-- getcode succ -->
    <div class="modal" id="getcodesucc">
        <div class="modal-dialog">
            <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-success">
                            <strong>Xin ch??c m???ng</strong> b???n ???? nh???n ph???n th?????ng giftcode th??nh c??ng.<br>
                            <ul><strong>Ph???n th?????ng ???? nh???n:</strong>
                                <li>+5 token</li>
                                <li>+1 coin</li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">???? hi???u</button>
                    </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            //Click checkcode -> gan value cho nameEvent
            $("button[name='checkcode']").click(function(){
                var specialEvName = $(this).parent().find("input").val();
                $("#nameEvent").val(specialEvName);
            });
            //Nhap icon trang ca nhan
            $("#logged").click(function(){
                window.location.href = "./panel.php";
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
            
            //H??m copy
            $("#copycode").click(function(){
                var $temp = $("<input>");
                $("body").append($temp);
                $temp.val($("#rsck-codebin").text()).select();
                document.execCommand("copy");
                $temp.remove();
                $("#nocop").hide();
                $("#copied").show();
                setTimeout(() => {
                    $("#nocop").show();
                    $("#copied").hide();
                }, 2000);
            });

        });
    </script>
    </html>
<?php
    $dbOFF -> close();
?>