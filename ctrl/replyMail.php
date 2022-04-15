<?php 
    if(isset($_POST['replymail'])){
        $fromwho = $_POST['fromwho'];
        $towho = $_POST['towho'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        $sql = "insert into playermails (fromwho,towho,title,content,response) values ('$fromwho','$towho','$title','$content','reply')";
        if(mysqli_query($dbOFF,$sql)){
            redirect($_SERVER['REQUEST_URI']);
        } else
            echo getUnidScript();
    }
?>