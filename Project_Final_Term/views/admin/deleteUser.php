<?php
    if (session_status() === PHP_SESSION_NONE) {
    session_start();
    }
    // print_r($_REQUEST);
?>
<html>
<head>
    <title>Delete User</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1><a href="admin.php" class="username">Back</a></h1>
    <h1 align='center' >All Users</h1>
    <table border="1" align="center" >
        <tr>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>password</th>
            <th>Balance</th>
            <th colspan="2"></th>
        </tr>
        <?php 
            include '../models/db.php';
            $con = getConnection();
            $query = "select * from user";
            $result = mysqli_query($con,$query);

            while($row = mysqli_fetch_assoc($result))
            {
                echo "<tr class='regularFont'>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['username']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['password']."</td>";
                echo "<td>".$row['balance']."</td>";
                // echo "<input type='hidden' name='username' value='".$row['username']."'>";
                // echo "<td><input type='submit' value='edit' name='edit' class='clearDB_btn'></td>";
                // echo "<td><input type='submit' value='delete' name='delete' class='clearDB_btn'></td>";
                ?>
                <td><a href='../controllers/deleteUser.php?username=<?php echo $row['username']?>' ><input type='submit' value='delete' name='delete' class='clearDB_btn'></a></td>
                <td><a href='edit.php?username=<?php echo $row['username']?>' ><input type='submit' value='edit' name='edit' class='clearDB_btn'></a></td>
                    
                    
                <?php 
                echo "</tr>";

            }
        ?>
    </table>

    <?php 
        if(isset($_SESSION['deleted']))
        {
            unset($_SESSION['deleted']);
    ?>
         <script>
            alert("User deleted Successfully!");
        </script>
    <?php 
        }
   ?>
</body>

</html>