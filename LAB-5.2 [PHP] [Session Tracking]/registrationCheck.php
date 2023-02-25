<html>
<head>
    <title>Registration Checking</title>
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
                <a href="login.php">Login</a>
            </th>
        </tr>

        <!-- body -->
        <tr height="200px">
            <td width=20%></td>
            <td>
                <?php
                session_start();
                $allFieldsFilled = true;
                foreach ($_REQUEST as $key => $value) {
                    $_SESSION[$key] = $value;
                    $_SESSION['#'.$key] = $value;
                    if (!isset($_REQUEST[$key]) or empty($value)) {
                        $allFieldsFilled = false;
                    }
                }

                if ($allFieldsFilled && isset($_REQUEST['submit']) && $_REQUEST['password'] == $_REQUEST['confirmPassword'] && isset($_REQUEST['gender'])) {
                    foreach ($_REQUEST as $key => $value) {
                        if($key[0] == '#') continue;
                        unset($_SESSION[$key]);
                    }
                ?>
                    <h3>Registration Completed!!</h3>
                    <a href="login.php"><i>Login now</i></a>
                    <?php
                } else {
                    // unset($_SESSION['gender']);
                    header('Location: registration.php');
                    exit;
                }
                ?>
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


