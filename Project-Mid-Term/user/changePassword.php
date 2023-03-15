<?php include '../repeat/activity.php';?>

<html>
<head>
    <title>Dashboard</title>
</head>
<body>

    <?php 
        include '../repeat/headerUser.php';
    ?>

        <tr>
            <td width=20%>
                <table  width=100%>
                    <tr>
                        <th><h2>Change Password</h2></th>
                    </tr>
                    <tr>
                        <td>
                            <?php 
                                include '../repeat/userMenuLink.php';
                            ?>

                        </td>
                    </tr>
                </table>
            </td>
            <td colspan="2">
                <form method="post" action="changePasswordCheck.php" enctype="">
                    <fieldset>
                        <legend>Change Password</legend>
                        <table width=100%>
                            <tr height=40px>
                                <td width=20%>
                                    Current Password : 
                                </td>
                                <td>
                                    <input type="password" name="currentPassword">
                                </td>
                            </tr>
                            <tr height=40px>
                                <td width=15%>
                                    New Password : 
                                </td>
                                <td>
                                    <input type="password" name="password">
                                </td>
                            </tr>
                            <tr height=40px>
                                <td width=15%>
                                    Confrim New Password : 
                                </td>
                                <td>
                                    <input type="password" name="confirmNewPassword">
                                </td>
                            </tr>
                        </table>
                        <input type="submit" name="submit" value="Submit">            
                        <?php
                            
                            if(isset($_REQUEST['error']))
                            {
                                echo "Password does not match! <br>";
                                unset($_SESSION['error']);
                            }else if(isset($_REQUEST['weak']))
                            {
                                echo "Password is weak! [1 special char, 1 uppercase, minimum length 5] <br>";
                                unset($_SESSION['weak']);
                            }else if(isset($_REQUEST['done']))
                            {
                                echo "Password changed!! <br>";
                                unset($_SESSION['done']);
                            }
                        ?>
                    </fieldset>
                </form>
            </td>
        </tr>
        
        <tr height="80px">
            <td colspan="3" align="center">
                <p>copytight © 2023</p>
            </td>
        </tr>
    </table>
</body>
</html>