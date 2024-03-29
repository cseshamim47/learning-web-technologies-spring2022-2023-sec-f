<?php
    session_start();
    $allFieldsFilled = true;
    foreach ($_REQUEST as $key => $value) {
        if (!isset($_REQUEST[$key]) or empty($value)) {
            $allFieldsFilled = false;
            break;
        }
    }
    if(isset($_REQUEST['#dob']) && !empty($_REQUEST['#dob']))
    {
        $dateString = $_REQUEST['#dob']; // A date of birth to check
        $dateString = explode('-',$dateString);
        // print_r($dateString);
        // get the users Date of Birth
        $BirthDay   = $dateString[2];
        $BirthMonth = $dateString[1];
        $BirthYear  = $dateString[0];

        //convert the users DoB into UNIX timestamp
        $stampBirth = mktime(0, 0, 0, $BirthMonth, $BirthDay, $BirthYear);

        // fetch the current date (minus 18 years)
        $today['day']   = date('d');
        $today['month'] = date('m');
        $today['year']  = date('Y') - 15;

        // generate todays timestamp
        $stampToday = mktime(0, 0, 0, $today['month'], $today['day'], $today['year']);
        echo $stampToday;
        if ($stampBirth > $stampToday) {
            $allFieldsFilled = false;
            header('Location: edit.php?dob');
            exit;
        }
    }
    
    if(isset($_REQUEST['#email']) && filter_var($_REQUEST['#email'], FILTER_VALIDATE_EMAIL) == false)
    {
        header('Location: edit.php?email');
        exit;
    }

    if ($allFieldsFilled && isset($_REQUEST['#submit']) && filter_var($_REQUEST['#email'], FILTER_VALIDATE_EMAIL)) {
        foreach ($_REQUEST as $key => $value) {
            $_SESSION[$key] = $value;
        }
        include '../repeat/updateFile.php';

        header('Location: view.php');
        exit;
    } else {
        header('Location: edit.php?error');
    }
?>