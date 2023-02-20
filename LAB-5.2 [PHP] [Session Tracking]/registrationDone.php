<html>
<head>
    <title>Home</title>
</head>
<body>
    <table border="1" width=100%>
        <!-- header -->
        <tr height="100px">
            <th width=20%>
                <a href="publicHome.php">
                    <img src="logo.jpg" alt="logo">
                </a>
            </th>
            <th></th>
            <th width=20%>
                <a href="publicHome.php">Home</a> |
                <a href="login.php">Login</a> |
                <a href="registration.php">Registration</a>
            </th>
        </tr>
        
        <!-- body -->
        <tr height="200px">
            <td width=20%></td>
            <td>
                <?php
                    if(isset($_REQUEST['submit']))
                    {
                ?>
                    <h3>Registration Completed!!</h3>
                    <a href="login.php"><i>Login now</i></a>
                <?php }else echo "<b>Invalid request!</b>"; ?>
            </td>
            <td width=20%></td>
        </tr>
        
        <!-- footer -->
        <tr height="80px">
            <td colspan="3" align="center">
                <p>copytight © 2023</p>
            </td>
        </tr>
    </table>
</body>
</html>

