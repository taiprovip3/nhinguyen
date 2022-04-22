<?php
    if(isset($_POST['letComment'])){
        if(isset($_SESSION['username'])){
            $s = $_POST['cmt-box'];
            $un = $_SESSION['username'];
            $sql = "insert into playercomments (username,comment) values ('$un',N'$s')";
            mysqli_query($dbOFF,$sql);
        } else{
            echo '<script>
            jQuery(document).ready(function(){
                $("#nolog").show();
            });
            </script>';
        }
    }
?>