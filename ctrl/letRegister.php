<?php
    if(isset($_POST['register'])) {

        $un = trim($_POST['username']);
        $pw = trim($_POST['password']);
        $em = trim($_POST['email']);

        $sql = "SELECT * FROM authme WHERE username = '$un'";
        $result = mysqli_query($dbON, $sql);
        if (mysqli_num_rows($result) > 0) {//TH: có rows ten un trong table
            echo '
            <script>
            jQuery(document).ready(function(){
                $("#reg-exist").show();
                close_exist();
                function close_exist() {
                    var count = 4;
                    var timer = setInterval(loop, 1000);
                    function loop() {
                        if(count!=0)
                        {
                            $("#reg-exist-num").text(count);
                            count--;
                        }else{
                            clearInterval(timer);
                            $("#reg-exist").hide();
                        }
                    }
                }
            });
            </script>
            ';
        } else{//TH ko co user trong table
            $salt = substr(md5(uniqid(rand(), TRUE)), 0, 16);
            $pwhassed = '$SHA$' . $salt . '$' . hash('sha256', hash('sha256', $pw) . $salt);
            
            $sql = "INSERT INTO authme (username, realname, `password`, ip, lastlogin, x, y, z, world, regdate, regip, yaw, pitch, email, isLogged, hasSession) VALUES ('$un','$un','$pwhassed',NULL,NULL,0,0,0,'world',0,NULL,NULL,NULL,'$em',0,0);";
            $sql .= "INSERT INTO `salt` VALUES ('$un', '$salt')";
            if(mysqli_multi_query($dbON, $sql) && mysqli_multi_query($dbOFF, $sql)){ //TH: query insert thanh cong
                echo '
                <script>
                jQuery(document).ready(function(){
                    $("#reg-succ").show();
                    close_succ();
                    function close_succ() {
                        var count = 4;
                        var timer = setInterval(loop, 1000);
                        function loop() {
                            if(count!=0)
                            {
                                $("#reg-succ-num").text(count);
                                count--;
                            }else{
                                clearInterval(timer);
                                $("#reg-succ").hide();
                            }
                        }
                    }
                });
                </script>
                ';
            } else{
                echo '<Script>
                    jQuery(document).ready(function(){
                        $("#reg-unid").show();
                        close_unid();
                        function close_unid() {
                            var count = 4;
                            var timer = setInterval(loop, 1000);
                            function loop() {
                                if(count!=0)
                                {
                                    $("#reg-unid-num").text(count);
                                    count--;
                                }else{
                                    clearInterval(timer);
                                    $("#reg-unid").hide();
                                }
                            }
                        }
                    });
                </script>';
            }
        }

    }//end if isset
?>