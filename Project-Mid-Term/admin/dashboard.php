<html>
<head>
    <title>Explorer</title>
</head>
<body>
<?php 
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
?>
<table border="1" width=100%>
        <tr height="100px">
            <th width=20%>
                <a href="dashboard.php">
                    <img src= <?php echo isset($_SESSION['#imagePath']) ? $_SESSION['#imagePath'] : 'btc.png'  ?> alt="logo" width="200px">
                    <?php 
                         unset($_SESSION['#imagePath']);
                    ?>
                </a>
            </th>
            <th align="middle">
                
            </th>
            <th width=20%>
                Logged in as <a href="dashboard.php"> <?php echo $_SESSION['adminusername']  ?></a> |
                <a href="logout.php">Logout</a> 
            </th>
</tr>


        <tr height=400px>
            <td width=20%>
                <table width=100%>
                    <tr>
                        <th><h2>Operations</h2></th>
                    </tr>
                    <tr>
                        <td>
                            
                        </td>
                    </tr>
                </table>
            </td>
            <td colspan="2">
                <fieldset>
                    <legend>Explorer</legend>
                    <table border="1" width=100% height=300px>
                        <tr>
                            <td align='center'><a href="manageUser.php"><h1>Manage User</h1></a></td>
                        </tr>
                        <tr>
                            <td align='center'><a href="manageBlockchain.php"><h1>Manage Blockchain</h1></a></td>
                        </tr>
                    </table>
                </fieldset>

            </td>
        </tr>
        
        <tr height="80px">
            <td colspan="3" align="center">
                <p>copyright © 2023</p>
            </td>
        </tr>
    </table>
</body>
</html>

