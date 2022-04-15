<?php 
    if(isset($_POST['checkcode'])){
        $year = (new DateTime)->format("Y");
        $nameEvent = $_POST['nameEvent'];
        $sql = "select * from code where codeid = '$nameEvent' and YEAR(enday) = $year";
        $result = mysqli_query($dbOFF, $sql);
        if(mysqli_num_rows($result) > 0){//TH: có code tồn tại trong năm nay
            $row = mysqli_fetch_array($result);
            echo '
            <script>
            jQuery(document).ready(function(){
                $("#rsck-codeid").text("'.$row["codeid"].'");
                $("#rsck-codebin").text("'.$row["codebin"].'");
                $("#rsck-enday").text("'.$row["enday"].'");
                $("#hidden-codebin").val("'.$row["codebin"].'");
                $("#codefound").modal("toggle");
            });
            </script>
            ';
        } else{//TH: code chưa diễn ra
            echo '
            <script>
            jQuery(document).ready(function(){
                $("#nocoming").modal("toggle");
            });
            </script>
            ';
        }
    }
?>