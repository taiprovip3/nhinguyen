<?php
    if(isset($_POST['checkcode'])){
        if(isset($_SESSION['username'])){
            $year = (new DateTime)->format("Y");
            $un = $_SESSION['username'];
            $nameEvent = $_POST['nameEvent'];
            $sql = "select * from code where codeid = '$nameEvent' and YEAR(enday) = $year";
            $result = mysqli_query($dbOFF, $sql);
            if(mysqli_num_rows($result) > 0){//TH: có code theo coid $nameEvent tồn tại trong năm nay
                $sqlQuery = "select * from playercodes where username = '$un' and YEAR(receiveat) = $year and codeid = '$nameEvent'";
                $rs = mysqli_query($dbOFF, $sqlQuery);
                if(mysqli_num_rows($rs) > 0){//TH: player da nhan (gotit) codeid nay trong nam nay
                    echo '
                    <script>
                    jQuery(document).ready(function(){
                        $("#rsck-notfound").hide();
                        $("#rsck-gotit").show();
                        $("#rsck-found").hide();
                        $("#checkcode-result").modal("toggle");
                    });
                    </script>
                    ';
                } else {//TH player chua nhan code nay trong nam nay
                    $row = mysqli_fetch_array($result);
                    $sql = "insert into playercodes (username,description,codeid) values ('$un','+5 token, +1 coins', '$nameEvent');";
                    $sql .= "insert into playermails (fromwho,towho,title,content) values ('Admin','$un','GIFTCODE".$nameEvent."|".$year."','$row[2]')";
                    if($dbOFF -> multi_query($sql)){//TH: tao code cho player thanh cong
                        echo '
                        <script>
                        jQuery(document).ready(function(){
                            $("#rsck-codeid").text("'.$row[0].'");
                            $("#rsck-codebin").text("'.$row[2].'");
                            $("#rsck-enday").text("'.$row[3].'");
                            $("#rsck-notfound").hide();
                            $("#rsck-gotit").hide();
                            $("#rsck-found").show();
                            $("#checkcode-result").modal("toggle");
                        });
                        </script>
                        ';
                    } else echo getUnidScript();
                }
            } else{//TH: codeid chua có hoặc chưa diễn ra
                echo '
                <script>
                jQuery(document).ready(function(){
                    $("#rsck-notfound").show();
                    $("#rsck-gotit").hide();
                    $("#rsck-found").hide();
                    $("#checkcode-result").modal("toggle");
                });
                </script>
                ';
            }
        } else{
            echo '
            <script>
            jQuery(document).ready(function(){
                alert("Bạn chưa đăng nhập.");
            });
            </script>
            ';
        }
    }
?>