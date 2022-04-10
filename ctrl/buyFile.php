<?php
    if(isset($_POST['buyfile'])){
        if(isset($_SESSION['username'])){
            $un = $_SESSION['username'];
            $fileid = $_POST['fileid'];
            $filename = $_POST['filename'];
            $filecost = $_POST['filecost'];

            if(getToken($un, $dbOFF) >= $filecost){//TH: đủ tien mua
                $sql = "update playercoins set token = token - '$filecost' where username = '$un';";
                $sql .= "insert into playerfiles values ('','$un','$filename',CURRENT_TIMESTAMP, 'https://uploading.vn/3w3nsm3z7g5g', '$fileid');";
                $sql .= "select * from countdownloads where fileid = '$fileid';";
                $dbOFF -> multi_query($sql);
                $dbOFF -> next_result();
                $dbOFF -> next_result();
                $result = $dbOFF -> store_result();
                if(mysqli_num_rows($result) <= 0){
                    $query = "insert into countdownloads (fileid,countdown) values ('$fileid', 1)";
                    $dbOFF -> query($query);
                } else {
                    $query = "update countdownloads set countdown = countdown + 1 where fileid = '$fileid'";
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