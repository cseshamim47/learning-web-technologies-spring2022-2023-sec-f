<?php include '../Repeat/activity.php';?>

<html>
<head>
    <title>Dashboard</title>
</head>
<body>

    <?php 
        include '../Repeat/headerUser.php';
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
                                include '../Repeat/userMenuLink.php';
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
                            
                            if(isset($_SESSION['pwChangeStatus']))
                            {
                                if($_SESSION['pwChangeStatus'])
                                {
                                    unset($_SESSION['pwChangeStatus']);
                                    echo "<br>Password changed!";
                                }else echo "Password does not match!";
                            }
                            unset($_SESSION['pwChangeStatus']);
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