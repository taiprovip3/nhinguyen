<?php
    if($_GET['key'] && $_GET['token']){
        include '../conn/dbOFF.php';
        $email = $_GET['key'];
        $token = $_GET['token'];
        $sql = mysqli_query($dbOFF,"select * from authme where email = '$email' and token = '$token'");
        if(mysqli_num_rows($sql) > 0){
            //Nếu tồn tại email đã reg trước đó
            $row = mysqli_fetch_array($sql);
            if($row['email_verified_at'] == NULL){
                $date = date('Y-m-d H:i:s');
                mysqli_query($dbOFF,"update authme set email_verified_at = '".$date."' where email = '".$email."'");
                echo "<script type='text/javascript'>
                    alert('Tài khoản actived thành công. Chúc vui vẽ!');
                </script>";
            } else{
                echo "<script type='text/javascript'>
                    alert('Email này đã được sử dụng.');
                </script>";
            }
        } else{//Email chưa hề dc sử dụng
            echo "<script type='text/javascript'>
                alert('Email này chưa được đăng ký trước đó.');
            </script>";
        }
    } else{
        echo "<script type='text/javascript'>
                alert('Ê ê ê ê, cố tình bug hả.');
            </script>";
    }
?>