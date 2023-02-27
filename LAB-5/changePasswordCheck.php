<?php
    session_start();
    $allFieldsFilled = true;
    foreach ($_REQUEST as $key => $value) {
        if (!isset($_REQUEST[$key]) or empty($value)) {
            $allFieldsFilled = false;
            break;
        }
    }

    if ($allFieldsFilled && isset($_REQUEST['submit']) && $_REQUEST['currentPassword'] == $_SESSION['#password'] && $_REQUEST['password'] == $_REQUEST['confirmNewPassword']) {
        $_SESSION['#password'] = $_SESSION['#confirmPassword'] = $_REQUEST['password'];
        $_SESSION['pwChangeStatus'] = true;
    }else
    {
        $_SESSION['pwChangeStatus'] = false;
    }
    header('Location: changePassword.php');
?>