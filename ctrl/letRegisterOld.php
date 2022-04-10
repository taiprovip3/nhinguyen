<?php 
    if(isset($_POST['register'])) {
        include('../func/class.smtp.php');
        include "../func/class.phpmailer.php";
        include "../func/functions.php";
        include "../func/hashpw.php";
        //Kiểm tra lỗi:
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $repassword = trim($_POST['repassword']);
        $errors = array();
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            if(strlen($password) >= 8 && strlen($password) <= 255){
                if($password === $repassword){
                    require '../conn/dbOFF.php';
                    $query = mysqli_query($dbOFF,"select * from authme where email = '".$email."'");
                    $row = mysqli_fetch_row($query);
                    if($row <= 0){
                        //Tai khoan chua he dang ky
                        $token = md5($email.rand(10,9999));
                        $salt = createSalt();
                        $password_hash = hashPassword($password,$salt);
                        $stmt = $dbOFF->prepare("insert into authme (email, password, token, salt) values (?,?,?,?)");
                        $stmt -> bind_param("ssss",$email,$password_hash,$token,$salt);
                        $stmt->execute();
                        $stmt->close();
                        $dbOFF->close();//Điền xuống db authme
                        $link = "<a href='localhost/nhinguyen/file/verification_email.php?key=".$email."&token=".$token."'>Nhấp vào đây để hoàn tất đăng ký</a>";
                        $title = "Đăng ký tài khoản nhinguyen.rf.gd";
                        $content = "Bạn vừa đăng ký email này tại trang web nhinguyen.rf.gd. Hãy nhấp vào đường dẫn này: ".$link."";
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
                    } else{
                        if($row[5] != NULL){
                            //Da dang ky roi
                            echo "<script type='text/javascript'>
                            alert('Email này đã có người sử dụng rồi.');
                            </script>";
                        } else{
                            //Da dang ky nhung chua xac thuc
                            $token = $row['token'];
                            $salt = createSalt();
                            $password_hash = hashPassword($password, $salt);
                            $query = mysqli_query($dbOFF,"update authme set password = '$password_hash', salt = '$salt' where email = '$email'");
                            $link = "<a href='localhost/nhinguyen/file/verification_email.php?key=".$email."&token=".$token."'>Nhấp vào xác thực đăng ký</a>";
                            $title = "Đăng ký tài khoản nhinguyen.rf.gd";
                            $content = "Bạn vừa đăng ký email này tại trang web nhinguyen.rf.gd. Hãy nhấp vào đường dẫn này: ".$link."";
                            $nTo = "Bạn";
                            $mTo = $email;
                            $mail = sendMail($title,$content,$nTo,$mTo,$diachicc='');
                            if($mail == 1)
                                echo "<script type='text/javascript'>
                                alert('Vui lòng kiểm tra hộp thư gmail.');
                                </script>";
                            else
                                echo "<script type='text/javascript'>
                                alert('Server đã xảy ra lỗi unidentify!');
                                </script>";
                        }
                    }
                }  else{
                    echo "<script type='text/javascript'>
                    alert('2 Password chưa giống nhau.');
                    </script>";
                    }
            } else{
                array_push($errors,"length_password");
                echo '
                <script>
                    alert("Password ít nhất 8 kí tự.");
                </script>
                ';
            }
        } else{
            array_push($errors, "invalid_email");
            echo '
            <script>
                alert("Chưa nhập email hoặc email ko hợp lệ.");
            </script>
            ';
        }
    }
?>