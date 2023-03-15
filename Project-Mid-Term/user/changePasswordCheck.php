<?php
    session_start();
    $allFieldsFilled = true;
    foreach ($_REQUEST as $key => $value) {
        if (!isset($_REQUEST[$key]) or empty($value)) {
            $allFieldsFilled = false;
            break;
        }
    }
    if(!($allFieldsFilled && isset($_REQUEST['submit']) && $_REQUEST['currentPassword'] == $_SESSION['#password'] && $_REQUEST['password'] == $_REQUEST['confirmNewPassword']))
    {
        header('Location: changePassword.php?error');
    }else if(!preg_match('/^(?=.*[A-Z])(?=.*[\W])(?=.{5,})/', $_REQUEST['password']))
    {
        header('Location: changePassword.php?weak');
    }else{
        $_SESSION['#password'] = $_REQUEST['password'];
        $_SESSION['pwChangeStatus'] = true;
        include 'updateFile.php';
        header('Location: changePassword.php?done');
    }
    
?>