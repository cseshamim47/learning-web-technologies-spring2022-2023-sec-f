<?php include '../repeat/activity.php';?>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <?php 
        include '../repeat/headerUser.php';
    ?>

        <tr height=400px>
            <td width=20%>
                <table width=100%>
                    <tr>
                        <th><h2>Dashboard</h2></th>
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
                    <legend>Dashboard</legend>
                    <h1>Welcome <?php echo $_SESSION['#username'] ?></h1>
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

