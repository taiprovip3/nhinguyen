<?php
if(isset($_POST['submit'])){
    $un = trim($_POST['username']);
    $sql = "SELECT * FROM `authme` WHERE username = '$un'";
    $result = mysqli_query($dbON, $sql);
    if (mysqli_num_rows($result) <= 0){//TH: nếu username ko co trong table
        echo '
        <script>
        jQuery(document).ready(function(){
            $("#wrongsomethings").show();
        });
        </script>
        ';
    } else{//TH: có ton tai trong table sẽ dò đến pw
            $pw = trim($_POST['password']);
            $sql = "SELECT salt FROM `salt` WHERE username = '$un'";
            $result = mysqli_query($dbON, $sql);
            $row = $result -> fetch_array(MYSQLI_NUM);
            $salt = $row[0];
            $pwinput = '$SHA$' . $salt . '$' . hash('sha256', hash('sha256', $pw) . $salt);
            $sql = "SELECT password FROM `authme` WHERE username = '$un'";
            $result = mysqli_query($dbON, $sql);
            $row = $result -> fetch_array(MYSQLI_NUM);
            $pwsystem = $row[0];//lấy dc pw trong auth
            if ($pwinput === $pwsystem){
                $_SESSION['username'] = $un;
                echo '
                    <script>
                    jQuery(document).ready(function(){
                        window.location.href = "../index.php";      
                    });
                    </script>
                ';
            }else {//TH: 2 password comperate khac nhau
                echo '
                <script>
                jQuery(document).ready(function(){
                    $("#wrongsomethings").show();
                });
                </script>
                ';
            }
        }
}//end isset
?>