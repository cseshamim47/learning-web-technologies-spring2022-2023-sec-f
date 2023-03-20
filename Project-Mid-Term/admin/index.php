<?php 
    session_start();
?>

<html>
<head>
    <title>Admin login</title>
</head>
<body>
       <!-- header -->
       <table border="1" width=100%>
            <tr height="100px">
                <th width=20%>
                    <a href="..\index.php">
                        <img src="btc.png" alt="logo" width="200px">
                    </a>
                </th>
                <th>Admin Login</th>
                <th width=20%>
                    <a href="index.php">Login</a>
            </th>
        </tr>
        <!-- body -->

        <tr height="200px">
            <td width=20%></td>
            <td>
                <form method="post" action="loginCheck.php">
                    <fieldset>
                        <legend><b>Admin Login</b></legend>
                        <table align="center" >
                            
                            <tr height=40px>
                                <td>
                                    Username : 
                                </td>
                                <td>
                                    <input type="text" name="username" value="<?php echo isset($_SESSION['lusername']) ? $_SESSION['lusername'] : ''  ?>">
                                </td>
                            </tr>
                            <tr height=40px>
                                <td width=90px>
                                    Password : 
                                </td>
                                <td>
                                    <input type="password" name="password" value="">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="checkbox" name="rememberMe" value="1">
                                    Remember Me 
                                    <br><br>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                <input type="submit" name="submit" value="Login"> 
                                <a href="forgotPassword.php"><i>Forgot Password?</i></a>           
                                </td>              
                            </tr>
                            <tr>
                                <td colspan="2">
                                <?php

                                    if(isset($_REQUEST['successful']))
                                    {
                                        echo "Account creation Successfull! Please login! <br>";
                                        unset($_REQUEST['successful']);
                                    }
                                    if(isset($_REQUEST['pwsuccessful']))
                                    {
                                        echo "Password changed!!! Please login! <br>";
                                        unset($_REQUEST['pwsuccessful']);
                                    }

                                    if(isset($_REQUEST['error']))
                                    {
                                        echo "username or password incorrect!<br>";
                                    }
                                    // print_r($_SESSION);

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
    unset($_SESSION['upw']);
    unset($_SESSION['lusername']);
?>