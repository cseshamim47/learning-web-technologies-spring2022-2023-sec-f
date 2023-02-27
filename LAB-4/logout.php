<?php
    session_start();
    if(isset($_SESSION['loggedin']))
    {
        unset($_SESSION['loggedin']);
        unset($_SESSION['rememberMe']);
        header('Location: publicHome.php');
    }else
    {
        header('Location: publicHome.php');
    }

?>