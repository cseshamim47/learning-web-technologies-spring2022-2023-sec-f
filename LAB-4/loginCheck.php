<?php
    session_start();
    if(isset($_REQUEST['submit']) && $_REQUEST['username'] == $_SESSION['#username'] && $_REQUEST['password'] == $_SESSION['#password'])
    {
        if(isset($_REQUEST['rememberMe']))
        {
            $_SESSION['expires'] = time()+86400;
        }else
        {
            $_SESSION['expires'] = time()+30;
        }
        $_SESSION['loggedin'] = true;
        unset($_SESSION['upw']);
        unset($_SESSION['lusername']);
        header('Location: dashboard.php');   
    }else 
    {
        unset($_SESSION['rememberMe']);
        $_SESSION['upw'] = true; // true = username or password wrong
        $_SESSION['lusername'] = $_REQUEST['username']; // saving username for retainment
        header('Location: login.php');
    }

?>