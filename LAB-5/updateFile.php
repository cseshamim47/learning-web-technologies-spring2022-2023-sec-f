<?php
    /// replacing a line here
    $newUser = $_SESSION['#name'].'|'.$_SESSION['#email'].'|'.$_SESSION['#username'].'|'.$_SESSION['#password'].'|'.$_SESSION['#gender'].'|'.$_SESSION['#dob'].'|'.$_SESSION['#profilePicture'];
    $reading = fopen('user.txt', 'r');
    $writing = fopen('user.tmp', 'w');
    $replaced = false;

    while (!feof($reading)) {
        $line = fgets($reading);
        $user = explode('|', $line);
        if(count($user) == 7 && $_COOKIE['username'] == trim($user[2]))
        {
            $line = $newUser; 
            $replaced = true;
        }
        fputs($writing, $line);
    }


    fclose($reading); fclose($writing);
    if ($replaced) 
    {
    rename('user.tmp', 'user.txt');
    } else {
    unlink('user.tmp');
    }
?>