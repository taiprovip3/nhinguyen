<?php 
    if(isset($_POST['deletemail'])){
        $mailid = $_POST['mailid'];
        $sql = "delete from playermails where mailid = '$mailid'";
        if(mysqli_query($dbOFF,$sql)){
            redirect($_SERVER['REQUEST_URI']);
        } else 
            echo getUnidScript();
    }
?>