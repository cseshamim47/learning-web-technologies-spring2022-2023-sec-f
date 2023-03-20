<?php
    session_start();
    if(isset($_REQUEST['submit']))
    {
        $file = fopen('db.txt', 'r');
            
        while(!feof($file)){
            $data = fgets($file);
            $user = explode('|', $data);
            if(count($user) >= 2 && $_REQUEST['username'] == trim($user[0]) && $_REQUEST['password']  == trim($user[1])){
                setcookie('admin', $_REQUEST['username'], time()+12312312, '/');
                setcookie('lastSeen', time(), time()+12312312, '/');
                $_SESSION['adminusername'] = $user[0];
                $_SESSION['adminpassword'] = $user[1];
                $_SESSION['adminemail'] = $user[2];
                
                if(isset($_REQUEST['rememberMe']))
                {
                    setcookie('adminrememberMe', 'true', time()+12312312, '/');
                }

                unset($_SESSION['upw']);
                unset($_SESSION['lusername']);
                // echo "success";
                header('location: dashboard.php');
                exit;
            }
        }

        header('location: index.php?error');
        
    }else 
    {
        unset($_SESSION['rememberMe']);
        $_SESSION['upw'] = true; // true = username or password wrong
        $_SESSION['lusername'] = $_REQUEST['username']; // saving username for retainment
        header('Location: index.php');
    }

?>