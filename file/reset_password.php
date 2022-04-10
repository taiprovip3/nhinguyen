<?php
    if($_GET['key'] && $_GET['token']){
        include '../conn/dbOFF.php';
        $email = $_GET['key'];
        $password = $_GET['token'];
        $sql = mysqli_query($dbOFF,"select * from authme where email = '$email' and token = '$password'");
        if(mysqli_num_rows($sql) > 0){
            //Select có kết quả
            $result = mysqli_query($dbOFF,"update authme set password = '$password' where email = '$email'");
            if($result)
                echo "<script type='text/javascript'>
                alert('Reset mật khẩu thành công.');
                </script>";
                die();
            else{ 
                die();
                echo "<script type='text/javascript'>
                alert('Đã xảy ra lỗi ko xác định.');
                </script>";
            }
        } else{//Email chưa hề dc sử dụng
            echo "<script type='text/javascript'>
                alert('Sự kiện tương tác này đã xảy ra lỗi.');
            </script>";
        }
    } else{
        echo "<script type='text/javascript'>
                alert('Ê ê ê ê, cố tình bug hả.');
            </script>";
    }
?>