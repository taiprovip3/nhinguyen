<?php 
    if(isset($_POST['update'])){
        $email = trim($_POST['inpEmail']);
        $sdt = trim($_POST['inpPhone']);
        $name = trim($_POST['inpName']);
        $age = trim($_POST['inpAge']);
        $sex = $_POST['selSex'];
        $password = $_POST['inpPassword'];
        $newpassowrd = "";
        if(isset($_POST['inpNewPassword']))
            $newpassword = $_POST['inpNewPassword'];
        $regexSdt = "/\d{10,15}/";
        $regexAge = "/\d{1,3}/";
        if(preg_match($regexSdt, $sdt) && preg_match($regexAge, $age)){//TH: chi kiem tra 2 field nếu có thay đổi
            $un = $_SESSION['username'];
            $sql = "select * from playerprofiles where username = '$un'";
            if(mysqli_num_rows(mysqli_query($dbOFF, $sql))){
                $stmt = $dbOFF -> prepare("update playerprofiles set email = ?, sdt = ?, name = ?, age = ?, sex = ? where username = ?");
                $stmt -> bind_param("sssiss", $email, $sdt, $name, $age, $sex, $un);
                $stmt -> execute();
            } else{
                $stmt = $dbOFF -> prepare("insert into playerprofiles values (?,?,?,?,?,?)");
                $stmt -> bind_param("sssiss", $email, $sdt, $name, $age, $sex, $un);
                $stmt -> execute();
            }
            echo '<script>
                jQuery(document).ready(function(){
                        $("#inpEmail").val("'.$email.'");
                        $("#inpPhone").val("'.$sdt.'");
                        $("#inpName").val("'.$name.'");
                        $("#inpAge").val("'.$age.'");
                        $("#selSex").val("'.$sex.'").change();
                });
            </script>';
            $regexPw = "/^[A-Za-z0-9!@#$%^&*()_+-[\]]{8,255}$/";
            if($password == "*******"){
            } else{
                if(preg_match($regexPw, $newpassword)){//TH: có bấm thêm thay đổi pw
                    $sql = "SELECT salt FROM `salt` WHERE username = '$un'";
                    $result = mysqli_query($dbOFF, $sql);
                    $row = $result -> fetch_array(MYSQLI_NUM);
                    $salt = $row[0];
                    $pwinput = hashPassword($salt,$password);
                    $sql = "SELECT password FROM `authme` WHERE username = '$un'";
                    $result = mysqli_query($dbOFF, $sql);
                    $row = $result -> fetch_array(MYSQLI_NUM);
                    $pwsystem = $row[0];//lấy dc pw trong auth
                    if($pwsystem === $pwinput){
                        $hashNewPassword = hashPassword($salt,$newpassword);
                        $sql = "update authme set password = '$hashNewPassword' where username = '$un'";
                        if(mysqli_query($dbOFF, $sql)){
                            echo '
                            <script>
                            jQuery(document).ready(function(){
                                alert("Thay đổi mật khẩu thành công!: '.$newpassword.'");
                            });
                            </script>
                            ';
                        } else{
                            echo getUnidScript();
                        }
                    } else{//TH: mật khẩu hiện tại ko chính xác
                        echo '
                        <script>
                        jQuery(document).ready(function(){
                            alert("Mật khẩu hiện tai ko chính xác: '.$password.'");
                        });
                        </script>
                        ';
                    }
                } else{
                    echo '
                    <script>
                    jQuery(document).ready(function(){
                        alert("Trường mật khẩu muốn đổi ko hợp lệ: '.$newpassword.'");
                    });
                    </script>
                    ';
                }
            }
        }
    }
?>