<?php
    function redirect($filename){
        if (!headers_sent())
            header('Location: '.$filename);
        else {
            echo '<script type="text/javascript">';
            echo 'window.location.href = \''.$filename.'\';';
            echo '</script>';
            echo '<noscript>';
            echo '<meta http-equiv="refresh" content="0;url=\''.$filename.'\'" />';
            echo '</noscript>';
        }
        exit();
    }
    function hashPassword($salt, $pw){
        return '$SHA$' . $salt . '$' . hash('sha256', hash('sha256', $pw) . $salt);//mã hóa pw nhập
    }
    function getToken($un, $dbOFF){
        $sql = "select token from playercoins where username = '$un'";
        $result = mysqli_query($dbOFF, $sql);
        $token = 0;
        if(mysqli_num_rows($result) > 0) {
            $row = $result -> fetch_array(MYSQLI_NUM);
            $token = $row[0];
        }
        return $token;
    }
    function getCoin($un, $dbOFF){
        $sql = "select coin from playercoins where username = '$un'";
        $result = mysqli_query($dbOFF, $sql);
        $coin = 0;
        if(mysqli_num_rows($result) > 0){//TH: có gia tri tra ve (row >= 1)
            $row = $result -> fetch_array(MYSQLI_NUM);
            $coin = $row[0];
        }
        return $coin;
    }
    function getCountDown($x, $dbOFF){
        $sql = "select countdown from countdownloads where fileid = '$x' or plid = '$x'";
        $result = mysqli_query($dbOFF, $sql);
        $downloads = 0;
        if(mysqli_num_rows($result) > 0){
            $row = $result -> fetch_array(MYSQLI_NUM);
            $downloads = $row[0];
        }
        return $downloads;
    }
    function getUnidScript(){
        $unidScript = "<script>
        jQuery(document).ready(function(){
			alert('Đã xảy ra lỗi vô cùng bí ẩn.');
		});
        </script>";
        return $unidScript;
    }
    function getCountMuster($un, $dbOFF){
        $sql = "select countmuster from playermusters where username = '$un'";
        $result = mysqli_query($dbOFF, $sql);
        $countmuster = 0;
        if(mysqli_num_rows($result) > 0){
            $row = $result -> fetch_array(MYSQLI_NUM);
            $countmuster = $row[0];
        }
        return $countmuster;
    }
    function getSerial($un, $dbOFF){
        $serials = array();

        $sql = "select id,uuid from authme where username = '$un';";
        $sql .= "select email,sdt,name,age,sex from playerprofiles where username = '$un'";
        
        $dbOFF -> multi_query($sql);
        $result = $dbOFF -> store_result();
        if(mysqli_num_rows($result) > 0){
            $row = $result -> fetch_row();
            $serials[0] = $row[0];
            $serials[1] = $row[1];
        }
        $result -> free_result();
        $dbOFF -> next_result();
        $result = $dbOFF -> store_result();
        if(mysqli_num_rows($result) > 0){
            $row = $result -> fetch_row();
            $serials[2] = $row[0];//email
            $serials[3] = $row[1];//sdt
            $serials[4] = $row[2];//name
            $serials[5] = $row[3];//age
            $serials[6] = $row[4];//sex
        } else{
            $serials[2] = "";//email
            $serials[3] = "";//sdt
            $serials[4] = "";//name
            $serials[5] = "";//age
            $serials[6] = "";//sex
        }
        return $serials;
    }
?>