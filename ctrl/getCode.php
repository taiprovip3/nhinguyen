<?php
    if(isset($_POST['getCode'])){
        if(isset($_SESSION['username'])){
            $yearnow = (new DateTime)->format("Y");
            $codebin = $_POST['inpcodebin'];
            $un = $_SESSION['username'];
            $sql = "select * from code where codebin = '$codebin'";
            $result = mysqli_query($dbOFF, $sql);
            if(mysqli_num_rows($result) > 0){//TH: có tồn tại code đang phát hành
                $row = mysqli_fetch_array($result);
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $usernow = new DateTime();
                $usernow = $usernow->format('Y-m-d H:i:s'); //2021-09-03 17:03:15
                $datenow = substr($usernow,0,10); //Lấy ngày hiện tại
                $enday = substr($row["enday"],0,10); //Lấy ngày hết hạn code
                if($datenow <= $enday) {//TH: code còn khả dụng
                    $sql = "select codeid from code where codebin = '$codebin'";
                    $result = mysqli_query($dbOFF, $sql);
                    $row = mysqli_fetch_array($result);
                    $codeid = $row[0];
                    $sql = "select * from playercodes where username = '$un' and codeid = '$codeid'";
                    $result = mysqli_query($dbOFF, $sql);
                    if(mysqli_num_rows($result) > 0){//TH: player đã nhận code rồi
                        echo '
                        <script>
                        jQuery(document).ready(function(){
                            $("#codeused").modal("toggle");
                        });
                        </script>
                        ';
                    } else{//TH chưa nhận code
                        $sql = "insert into playercodes (username,description,checkout,codeid) values ('$un','+5 token, +1 coin',1,'$codeid');";
                        $sql .= "update playercoins set token = token + 5, coin = coin + 1 where username = '$un'";
                        if($dbOFF -> multi_query($sql)){
                            $dbOFF -> next_result();
                            echo '
                            <script>
                            jQuery(document).ready(function(){
                                $("#getcodesucc").modal("toggle");
                            });
                            </script>
                            ';
                        } else
                            echo getUnidScript();
                    }
                } else {
                    echo '
                        <script>
                        jQuery(document).ready(function(){
                            alert("Code này đã quá hạn sử dụng.");
                        });
                        </script>
                        ';
                }
            }
        } else {
            echo '
            <script>
            jQuery(document).ready(function(){
                $("#nolog").modal("toggle");
            });
            </script>
            ';
        }
    }
?>