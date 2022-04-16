<?php 
    if(isset($_POST['muster'])){
        if(isset($_SESSION['username'])){
            $un = $_SESSION['username'];

            $sql = "select lastmuster from playermusters where username = '$un'";
            $result = mysqli_query($dbOFF, $sql);
            if (mysqli_num_rows($result) > 0) {//TH: Có tồn tại username đã từng điểm danh
                $row = $result -> fetch_array(MYSQLI_NUM);
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $usernow = new DateTime();
                $usernow = $usernow->format('Y-m-d H:i:s'); //2021-09-03 17:03:15
                $datenow = substr($usernow,0,10); //Lấy ngày hiện tại
                $datemusted = substr($row[0],0,10); //Lấy ngày cuối điểm danh lần trc'
                if($datenow != $datemusted){//TH: hôm nay chưa điểm danh
                    $sql = "update playermusters set lastmuster = '$usernow', countmuster = countmuster + 1 where username = '$un';";
                    $sql .= "update playercoins set token = token + 1 where username = '$un'";
                    if($dbOFF -> multi_query($sql)) {
                        $dbOFF -> next_result();
                        echo '
                        <script>
                        jQuery(document).ready(function(){
                            $("#succtran").modal("toggle");
                        });
                        </script>
                        ';
                    } else echo getUnidScript();
                } else{ //TH: đã điểm danh hôm nay
                    echo '
                        <script>
                        jQuery(document).ready(function(){
                            $("#mustered").modal("toggle");
                        });
                        </script>
                        ';
                }
            } else {//TH: điểm danh lần đầu
                $sql = "insert into playermusters (username, countmuster) values ('$un', 1);";
                $sql .= "insert into playercoins (username, token) values ('$un', 1)";
                if($dbOFF -> multi_query($sql)) {
                    $dbOFF -> next_result();
                    echo '
                    <script>
                    jQuery(document).ready(function(){
                        $("#succtran").modal("toggle");
                    });
                    </script>
                    ';
                } else echo getUnidScript();
            }

            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $usernow = new DateTime();
            $usernow = $usernow->format('Y-m-d H:i:s'); //2021-09-03 17:03:15
            $datenow = substr($usernow,0,10); //2021-09-03; lấy ngày hiện tại
            
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