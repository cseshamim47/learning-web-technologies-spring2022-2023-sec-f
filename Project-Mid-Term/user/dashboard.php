<?php include '../Repeat/activity.php';?>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <?php 
        include '../Repeat/headerUser.php';
    ?>

        <tr >
            <td width=20%>
                <table width=100%>
                    <tr>
                        <th><h2>Dashboard</h2></th>
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
                <h1>Welcome <?php echo $_SESSION['#username'] ?></h1>

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

