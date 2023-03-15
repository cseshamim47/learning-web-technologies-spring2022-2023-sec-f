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
                <table width=100%>
                    <tr>
                        <th><h2>Change Profile Picture</h2></th>
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
                <fieldset>
                    <legend><h3>Profile Picture</h3></legend>
                    <form method="post" action="changeProfilePictureCheck.php" enctype="multipart/form-data">
                        <table border="0" width=100%>
                            <tr>
                                <td>
                                    <img width=200px src="<?php echo isset($_SESSION['#profilePicture']) ? "../includes/".$_SESSION['#profilePicture'] : "../includes/profile.jpg" ?>" alt="Profile Picture">
                                </td>
                                <td width=80%></td>
                            </tr>
                            <tr>
                                <td height=60px>
                                    <input type="file" name="profilePicture"  id="profilePicture">
                                </td>
                                <td></td>
                                <?php 
                                    if(isset($_REQUEST['error']))
                                    {
                                        echo "please upload a correct format. [jpg,jpeg,png] <br>";
                                    }
                                ?>
                            </tr>
                            <tr>
                                <td>
                                    <hr>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" name="submit" value="Submit">
                                </td>
                                <td></td>
                            </tr>
                        </table>
                    </form>
                </fieldset>
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