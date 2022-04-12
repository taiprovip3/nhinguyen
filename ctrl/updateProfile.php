<?php 
    if(isset($_POST['update'])){
        $email = trim($_POST['inpEmail']);
        $sdt = trim($_POST['inpPhone']);
        $name = trim($_POST['inpName']);
        $age = trim($_POST['inpAge']);
        $sex = "";
        if(isset($_POST['selSex'])){
            $sex = $_POST['selSex'];
        }
        $regexSdt = "/\d{10,15}/";
        $regexAge = "/\d{1,3}/";
        if(preg_match($regexSdt, $sdt) == 1 && preg_match($regexAge, $age) == 1){
            echo '
            <script>
            jQuery(document).ready(function(){
                alert("TGood!");
            });
            </script>
            ';
        } else{
            echo '
            <script>
            jQuery(document).ready(function(){
                alert("Trường: Sđt hoặc tuổi nhập không hợp lệ:'.$sex.'");
            });
            </script>
            ';
        }
    }
?>