<?php
    session_start();
    if(isset($_REQUEST['reset']))
    {
        $_SESSION = [];
        header('Location: registration.php');
        exit;
    }

    $allFieldsFilled = true;
    foreach ($_REQUEST as $key => $value) {
        $_SESSION[$key] = $value;
        if (!isset($_REQUEST[$key]) or empty($value)) {
            $allFieldsFilled = false;
        }
    }
    /// username and email checking
    if($allFieldsFilled = true)
    {
        $file = fopen('../db/user.txt', 'r');
            
        while(!feof($file)){
            $data = fgets($file);
            $user = explode('|', $data);
            if(count($user) > 2 && ($_REQUEST['email'] == trim($user[1]) || $_REQUEST['username']  == trim($user[2]))){
                header('Location: registration.php?userExist');
                exit;
            }
        }

        fclose($file);
    }
    /// dob checking
    if(isset($_SESSION['dob']) && !empty($_SESSION['dob']))
    {
        $dateString = $_SESSION['dob']; // A date of birth to check
        $dateString = explode('-',$dateString);
        print_r($dateString);
        // get the users Date of Birth
        $BirthDay   = $dateString[2];
        $BirthMonth = $dateString[1];
        $BirthYear  = $dateString[0];

        //convert the users DoB into UNIX timestamp
        $stampBirth = -1;
        $stampBirth = mktime(0, 0, 0, $BirthMonth, $BirthDay, $BirthYear);

        // fetch the current date (minus 15 years)
        $today['day']   = date('d');
        $today['month'] = date('m');
        $today['year']  = date('Y') - 15;

        // generate todays timestamp
        $stampToday = mktime(0, 0, 0, $today['month'], $today['day'], $today['year']);
        echo $stampToday;
        if ($stampBirth > $stampToday || $BirthYear < 1970) {
            $allFieldsFilled = false;
        }
    }
    
    /// checking password/email validity
    include 'checkValidity.php';
      
    if ( $allFieldsFilled && validatePassword($_SESSION['password']) && isEmailValid($_REQUEST['email']) && isset($_REQUEST['submit']) && $_REQUEST['password'] == $_REQUEST['confirmPassword'] && isset($_REQUEST['gender'])) 
    {
        $file = fopen('../db/user.txt', 'a');
        $user = "";
        foreach ($_REQUEST as $key => $value) {
            $_SESSION[$key] = "";
            $_REQUEST[$key] = "";
            if($key == "confirmPassword" || $key == "submit") continue;
            $user = $user."|".$value;
        }
        $user = substr($user, 1, -1);
        $user = $user."|profile.jpg|0000";
        $addNewline = "\r\n".$user;
        $user = $addNewline;
        fwrite($file, $user);
        $user = "";
        header('Location: login.php?successful');
    }else {
        header('Location: registration.php?error');
    }
?>
 


