<?php
    session_start();
    
    unset($_COOKIE['adminrememberMe']);
    unset($_COOKIE['adminusername']);
    setcookie('adminrememberMe', '', time()-600, '/');
    setcookie('adminusername', '', time()-600, '/');
    $_SESSION=[];
    header('Location: index.php');
?>