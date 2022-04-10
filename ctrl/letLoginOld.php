<?php
    if(isset($_POST['login'])){
        include '../func/hashpw.php';
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $sql = "select salt from authme where email = '$email'";
        $result = mysqli_query($dbOFF,$sql);
        $row = $result->fetch_array();
        $password_hash = hashPassword($password,$row["salt"]);
        $sql = "select * from authme where email = '$email' and password = '$password_hash'";
        $result = mysqli_query($dbOFF,$sql);
        if($result -> num_rows > 0){
            $row = $result -> fetch_assoc();
            if($row["email_verified_at"] != null ){
                $_SESSION['email'] = $email;
                echo '
                <script>
                jQuery(document).ready(function(){
                        window.location.href = "../file/login.php"
                });
                </script>
                ';
            } else
                echo '
                <script>
                jQuery(document).ready(function(){
                    alert("Tài khoản này chưa được xác thực.");
                });
                </script>
                ';
        } else
            echo '
            <script>
            jQuery(document).ready(function(){
                alert("Tên đăng nhập hoặc mật khẩu ko chính xác.");
            });
            </script>
            ';
    }
?>