<?php 
    session_start();
?>
<html>
<head>
    <title>Manage User</title>
</head>
<body>

<table border="1" width=100%>
        <tr height="100px">
            <th width=20%>
                <a href="dashboard.php">
                    <img src= <?php echo isset($_SESSION['#imagePath']) ? $_SESSION['#imagePath'] : 'btc.png'  ?> alt="logo" width="200px">
                    <?php 
                        if(isset($_SESSION['#imagePath']))
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
                        <th><h2>Manage User</h2></th>
                    </tr>
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td width=70%></td>
                                    <td><a href="dashboard.php">Back</a></td>
                                    <td></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
            <td colspan="2">
                <form method = "get" action="conversion.php" >
                <fieldset>
                    <legend>All Users</legend>
                    <form action="#">
                    <table border="1" width=200px>
                        <tr>
                            <td>Username</td>
                            <td>Email Address</td>
                            <td>Details</td>
                            <td>Delete User</td>
                        </tr>
                        <tr>
                                
                        </tr>
                            <td>Shamim</td>
                            <td>Shamim</td>
                            <td><a href="#">Details</a></td>
                            <td><a href=
                            <?php 
                                echo "delete.php?"."user=shamim";
                            ?>
                            >Delete</a></td>
                            
                    </table>
                    </form>
                    </fieldset>
                </form>

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

