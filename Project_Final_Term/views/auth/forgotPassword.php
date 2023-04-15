<?php 
    require 'vendor/autoload.php';
    use PHPMailer\PHPMailer\PHPMailer;
    session_start();
    echo "<pre>";
    print_r($_SESSION);
    if(isset($_REQUEST['yes']) && isset($_SESSION['#email']))
    {
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPDebug = 2;
        $mail->Host = 'smtp.hostinger.com';
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->Username = 'test@cseshamim.com';
        $mail->Password = 'Fourseven47.';
        $mail->setFrom('test@cseshamim.com', 'Reset Password');
        $mail->addReplyTo('test@cseshamim.com', 'do-not-reply');
        $mail->addAddress($_SESSION['#email'], $_SESSION['#name']);
        $mail->Subject = 'Temporary Password';
        //    $mail->msgHTML(file_get_contents('message.html'), __DIR__);
        $_SESSION['#code'] = rand(123123,99912319);
        $mail->Body = "Hi ".$_SESSION['#name']."\r\nUse this code to reset your password : ".$_SESSION['#code'].". It expires in five minutes!";
        //$mail->addAttachment('attachment.txt');
        if (!$mail->send()) {
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {

            setcookie("username",$_SESSION['#username'],time()+123123,'/');
            include '../repeat/updateFile.php';
            // unset($_COOKIE['username']);
            // setcookie('username',$_SESSION['#username'],time()-123123);
            header('location: newPassword.php');
            // echo 'The email message was sent.';
        }
        // $_SESSION = [];
        // $_REQUEST = [];
        // unset($_REQUEST);
        exit;
    }
?>

<html>
<head>
    <title>Home</title>
</head>
<body>
       <!-- header -->
        <?php include '../repeat/header.php';  ?>
        <!-- body -->

        <tr height="200px">
            <td width=20%></td>
            <td>
                <form method="get" action="forgotPassword.php">
                    <fieldset>
                        <legend>Login</legend>
                        <table align="center" >
                            
                            <tr height=40px>
                                <td>
                                    Username or email : 
                                </td>
                                <td>
                                    <input type="text" name="username" value="<?php echo isset($_REQUEST['username']) ? $_REQUEST['username'] : ''  ?>">
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                <input type="submit" name="submit" value="Submit"> 
                                </td>              
                            </tr>
                            <tr>
                                <td colspan="2">
                                <?php

                                    if(isset($_REQUEST['username']))
                                    {
                                        $file = fopen('../db/user.txt', 'r');
                                        while(!feof($file)){
                                            $data = fgets($file);
                                            $user = explode('|', $data);
                                            if(count($user) > 2 && ($_REQUEST['username'] == trim($user[2]) || $_REQUEST['username']  == trim($user[1]))){
                                                $_SESSION['#username'] = $user[2];
                                                $_SESSION['#name'] = $user[0];
                                                $_SESSION['#email'] = $user[1];
                                                $_SESSION['#dob'] = $user[5];
                                                $_SESSION['#profilePicture'] = $user[6];
                                                $_SESSION['#gender'] = $user[4];
                                                $_SESSION['#password'] = $user[3];
                                                $_SESSION['#code'] = $user[7];
                                                print_r($_SESSION);
                                            }
                                        }
                                        if(isset($_SESSION['#email']))
                                        {
                                ?>
                                        <table border="1" width=100%>
                                            <tr>
                                                <td width=30%>Username: </td>
                                                <td>
                                                    <?php 
                                                       echo "<b>".$_SESSION['#username']."</b>";
                                                    ?>
                                                </td>
                                                <td rowspan="3">
                                                    <img src= 
                                                        <?php 
                                                            echo "../includes/".$_SESSION['#profilePicture'];
                                                        ?> 
                                                    alt="pp" width="150px">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width=30%>Email: </td>
                                                <td>
                                                    <?php 
                                                       echo "<b>".$_SESSION['#email']."</b>";
                                                    ?>
                                                </td>
                                            </tr>

                                        </table>
                                        <form action="forgotPassowrd.php" method="get">

                                            <h3>Is this you?</h3><br>
                                            <input type="submit" value="Yes" name="yes">
                                            <input type="submit" value="No" name="no">
                                        </form>
                                <?php      
                                            if(isset($_REQUEST['no']))
                                            {
                                                $_SESSION = [];
                                                $_REQUEST = [];
                                                unset($_REQUEST);
                                                header('Location: forgotPassword.php');
                                                exit;
                                            }                           
                                        }else echo "<b>user not found!</b><br>";

                                    }   
                                ?>
                                </td>              
                            </tr>
                        </table>
                    </fieldset>

                </form>

            </td>
            <td width=20%></td>
        </tr>
        

<!-- footer -->
<?php 
    
    include '../repeat/footer.php';
?>