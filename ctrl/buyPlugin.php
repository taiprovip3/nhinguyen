<?php
    if(isset($_POST['buyplugin'])){
        if(isset($_SESSION['username'])){
            $un = $_SESSION['username'];
            $plid = $_POST['plid'];
            $plname = $_POST['plname'];
            $plcost = $_POST['plcost'];

            if(getToken($un, $dbOFF) >= $plcost){//TH: đủ tien mua
                $links = array("https://uploading.vn/advancedindicator1", "https://uploading.vn/animabossbar2", "https://uploading.vn/askyblock3", "https://uploading.vn/auctionhouse4", "https://uploading.vn/authme5", "https://uploading.vn/autopickup6", "https://uploading.vn/anticraft7");
                $sql = "update playercoins set token = token - '$plcost' where username = '$un';";
                $sql .= "insert into playerplugins values ('','$un','$plname',CURRENT_TIMESTAMP, '$links[$plid]', '$plid');";
                $sql .= "select * from countdownloads where plid = '$plid'";
                $dbOFF -> multi_query($sql);
                $dbOFF -> next_result();
                $dbOFF -> next_result();
                $result = $dbOFF -> store_result();
                if(mysqli_num_rows($result) <= 0){
                    $query = "insert into countdownloads (plid,countdown) values ('$plid', 1)";
                    $dbOFF -> query($query);
                } else {
                    $query = "update countdownloads set countdown = countdown + 1 where plid = '$plid'";
                    $dbOFF -> query($query);
                }
                $token = getToken($un, $dbOFF);
                $coin = getCoin($un, $dbOFF);
                echo '<script>
                jQuery(document).ready(function(){
                    $("#token").text("'.$token.'");
                    $("#coin").text("'.$coin.'");
                    $("#transucc").modal("toggle");
                });
                </script>';
            } else{
                echo '<script>
                jQuery(document).ready(function(){
                    $("#noenough").modal("toggle");
                });
                </script>';
            }
        } else{
            echo '<script>
                jQuery(document).ready(function(){
                    $("#nolog").modal("toggle");
                });
            </script>';
        }
    }
?>