<?php
    if(isset($_POST['getRate'])){
        $star = $_POST['rated'];
        if($star != ""){
            $sql = "update rates set count_rate = count_rate + 1, total_star = total_star + $star";
            mysqli_query($dbOFF,$sql);
            echo '
                <script>
                jQuery(document).ready(function(){
                    alert("Cám ơn bạn đã đánh giá.");
                });
                </script>
                ';
        }
        else
            echo '
                <script>
                jQuery(document).ready(function(){
                    alert("Vui lòng chọn số sao.");
                });
                </script>
                ';
    }
?>