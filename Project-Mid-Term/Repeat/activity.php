<?php
    session_start();
    // print_r($_SESSION);
    if(!isset($_SESSION['#username']))
    {

    }else if((isset($_COOKIE['lastSeen']) && time()-$_COOKIE['lastSeen'] < 300 && !isset($_SESSION['#username'])) || (isset($_COOKIE['rememberMe']) && !isset($_SESSION['#username'])))
    {
        $file = fopen('../db/user.txt', 'r');
        while(!feof($file)){
            $data = fgets($file);
            $user = explode('|', $data);
            if(count($user) == 7 && $_COOKIE['username'] == trim($user[2])){
                $_SESSION['#username'] = $user[2];
                $_SESSION['#name'] = $user[0];
                $_SESSION['#email'] = $user[1];
                $_SESSION['#dob'] = $user[5];
                $_SESSION['#profilePicture'] = $user[6];
                $_SESSION['#gender'] = $user[4];
                $_SESSION['#password'] = $user[3];
                $_SESSION['#code'] = $user[7];
                setcookie('lastSeen', time(), time()+12312312, '/');
                fclose($file);
                header('Location: ../user/dashboard.php');
                exit;
            }
        }
    }else if(!isset($_SESSION['#username']))
    {
        header('Location: ../auth/login.php');
    }
    // print_r($_SESSION);
?>