<?php
    if(isset($_POST['buyfile'])){
        if(isset($_SESSION['username'])){
            $un = $_SESSION['username'];
            $fileid = $_POST['fileid'];
            $filename = $_POST['filename'];
            $filecost = $_POST['filecost'];

            if(getToken($un, $dbOFF) >= $filecost){//TH: đủ tien mua
                $linkfiles = array("https://uploading.vn/oizugjxr97sq","https://uploading.vn/robmxdmf5010","https://uploading.vn/o1cl29edhmg3","https://uploading.vn/ilvjge5qvvez","https://uploading.vn/ip9j3co0nv3z","https://uploading.vn/epv6ntbm63bv","https://uploading.vn/xanypvv194r9","https://uploading.vn/o2fdt4117nmx","https://uploading.vn/6m52nv8rtnme","https://uploading.vn/k84y0ts3rc6a","https://uploading.vn/pxbofymidcmw","https://uploading.vn/07e67i6fqe1a");
                $sql = "update playercoins set token = token - '$filecost' where username = '$un';";
                $sql .= "insert into playerfiles values ('','$un','$filename',CURRENT_TIMESTAMP, '$linkfiles[$fileid]', '$fileid');";
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