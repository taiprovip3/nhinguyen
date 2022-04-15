<?php
if(isset($_POST['savecode'])){
    if(isset($_SESSION['username'])){
        $un = $_SESSION['username'];
        $codebin = $_POST['hidden-codebin'];
        $sql = "insert into playermails (fromwho,towho,title,content) values ('Admin','$un','GIFTCODE','$codebin')";
        if(mysqli_query($dbOFF, $sql))
            echo '
            <script>
            jQuery(document).ready(function(){
                $("#savesucc").modal("toggle");
            });
            </script>
            ';
        else
            echo getUnidScript();
    } else{
        echo '
        <script>
        jQuery(document).ready(function(){
            $("#nolog").modal("toggle");
        });
        </script>
        ';
    }
}
?>