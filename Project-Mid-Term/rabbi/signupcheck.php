<?php 

session_start();
if(isset($_REQUEST['submit'])){
    $name = $_REQUEST['u_name'];
    $email = $_REQUEST['u_email'];
    $pass = $_REQUEST['password'];
    $repass = $_REQUEST['retypepassword'];
if($name == "" || empty($email) || empty($pass) || empty($repass)){
       echo "NUll INPUT";
    }
    elseif ($pass != $repass){
        echo "password not match";
    }
    elseif(strlen(trim($pass))< 8){
        echo "Password should not less then 8 characters ";
    }


else{
    $file=fopen('user.txt', 'r');
    $email_exist = false;
    while(!feof($file)){
        $info= fgets($file);
        $user = explode("|", $info);
        if($user[1] == $email){
            $email_exist=true;
            break;
        }

    }
    fclose($file);
    if($email_exist){
        echo " the user email all ready exist. try by different email  ";
    }
    else{
        $file = fopen('user.txt', 'a');
        $user = $name."|".$email."|".$pass."|".$repass."\r\n";
        fwrite($file,$user);
        fclose($file);
        header('loction: signin.php');
    }
}
   }
      else {
        echo "Invalid request...........";
    }
    ?>
