<?php 

    $username = $_GET['username'];

    require_once('../models/userModel.php');

    $row = seeByUsername($username);
    $data = json_encode($row);
    // if(isset($data['username']))
    echo $data;
    // else echo "no user found!";

    // require 'vendor/autoload.php';
    // use PHPMailer\PHPMailer\PHPMailer;
    // session_start();
    // echo "<pre>";
    // // print_r($_SESSION);
    // if(isset($_REQUEST['yes']) && isset($_SESSION['#email']))
    // {
    //     $mail = new PHPMailer;
    //     $mail->isSMTP();
    //     $mail->SMTPDebug = 2;
    //     $mail->Host = 'smtp.hostinger.com';
    //     $mail->Port = 587;
    //     $mail->SMTPAuth = true;
    //     $mail->Username = 'test@cseshamim.com';
    //     $mail->Password = 'Fourseven47.';
    //     $mail->setFrom('test@cseshamim.com', 'Reset Password');
    //     $mail->addReplyTo('test@cseshamim.com', 'do-not-reply');
    //     $mail->addAddress($_SESSION['#email'], $_SESSION['#name']);
    //     $mail->Subject = 'Temporary Password';
    //     //    $mail->msgHTML(file_get_contents('message.html'), __DIR__);
    //     $_SESSION['#code'] = rand(123123,99912319);
    //     $mail->Body = "Hi ".$_SESSION['#name']."\r\nUse this code to reset your password : ".$_SESSION['#code'].". It expires in five minutes!";
    //     //    $mail->addAttachment('attachment.txt');
    //     if (!$mail->send()) {
    //         echo 'Mailer Error: ' . $mail->ErrorInfo;
    //     } else {

    //         setcookie("username",$_SESSION['#username'],time()+123123,'/');
    //         include '../repeat/updateFile.php';
    //         // unset($_COOKIE['username']);
    //         // setcookie('username',$_SESSION['#username'],time()-123123);
    //         header('location: newPassword.php');
    //         // echo 'The email message was sent.';
    //     }
    //     // $_SESSION = [];
    //     // $_REQUEST = [];
    //     // unset($_REQUEST);
    //     exit;
    // }
?>


                               