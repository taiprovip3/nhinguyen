<?php
    if(isset($_POST['f_getOTP'])){
        $email = $_POST['f_email'];
        $result = mysqli_query($dbOFF,"select email_verified_at from authme where email = '$email'");
        if(mysqli_num_rows($result) <= 0){
            //Nếu chưa đăng ký email
            echo "<script type='text/javascript'>
            alert('Email chưa được đăng ký.');
            </script>";
        } else{
            $row = mysqli_fetch_array($result);
            if($row['email_verified_at'] == NULL){
                //Nếu email đã đăng ký nhưng chưa xác thực
                echo "<script type='text/javascript'>
                alert('Email chưa được xác thực.');
                </script>";
            } else{
                //Trường hợp đã đăng ký & đã xác thực nhưng quên password
                include('../func/class.smtp.php');
                include "../func/class.phpmailer.php";
                include "../func/functions.php";
                include "../func/hashpw.php";

                #generate password mới
                $container = '!@#$%*&abcdefghijklmnpqrstuwxyzABCDEFGHJKLMNPQRSTUWXYZ23456789';
                $password = substr(str_shuffle($container), 0, 12);
                
                #cap nhat lai token
                mysqli_query($dbOFF,"update authme set token = '$password' where email = '$email'");

                #Gửi mail cho user
                $link = "<a href='localhost/nhinguyen/file/reset_password.php?key=".$email."&token=".$password."'>Nhấp vào đây để đổi mật khẩu.</a>";
                $title = "Reset mật khẩu nhinguyen.rf.gd";
                $line1 = "• Ai đó vừa yêu cầu reset password email này tại trang web của chúng tôi.";
                $line2 = "• Mật khẩu mới của bạn dự kiến là: <b>".$password."</b>";
                $line3 = "• Nếu bạn đồng ý reset password hãy nhấp vào đường dẫn bên dưới đây:";
                $content = $line1."<br>".$line2."<br>".$line3."<br>".$link;
                $nTo = "Bạn";
                $mTo = $email;
                $mail = sendMail($title,$content,$nTo,$mTo,$diachicc='');
                if($mail == 1)
                    echo "<script type='text/javascript'>
                    alert('Oke, vui lòng kiểm tra hộp thư email.');
                    </script>";
                else
                    echo "<script type='text/javascript'>
                    alert('Đã xảy ra lỗi unidentify!');
                    </script>";
            }
        }
    }
?>