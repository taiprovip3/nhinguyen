<?php
    if(isset($_POST['logout']))
    {
        session_start();
        setcookie(session_name(), '', 100);
        session_unset();
        session_destroy();
        $_SESSION = array();
        $path = $_POST['dirname'];
        header("Location:".$path);
    }
?>