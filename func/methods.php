<?php
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
?>