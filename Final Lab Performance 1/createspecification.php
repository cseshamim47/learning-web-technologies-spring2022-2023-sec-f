<?php
session_start();
if(isset($_COOKIE['flag'])){
?>

<html>
    <head>
        <title>Create Specification</title>
    </head>
    <body>
    <center>
        <table  height=720 width=1080>
            <tr height=70>

                <td colspan="2"> 
                    <table width = "800">
                    <tr>
                        <td>
                           
                        </td>
                        <td align="right">
                        Logged in as  <?php echo $_SESSION['name'] ?> |
                                    <a href="logout.php">Logout</a>
                    </td>    
                </tr>    
                </table>
                </td>
            </tr>
            <tr>












                <td width="300">
                    
                <ul>
                <li> <a href="create.php"> Create Specification</a></li>
                <li> <a href="delete.php">Delete Specification</a></li>
                <li> <a href="update.php">Update Specification</a></li>

                </ul>

                </td>




                <td>

            

                </td>




            </tr>


            
        </table>
    </center>
    </body>
</html>

<?php
}else{
    header('location: login.php'); 
}
?>