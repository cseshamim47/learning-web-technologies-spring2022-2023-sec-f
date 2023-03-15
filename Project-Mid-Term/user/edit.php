<?php include '../repeat/activity.php';?>

<html>
<head>
    <title>View</title>
</head>
<body>
    <?php 
        include '../repeat/headerUser.php';
    ?>

        <tr>
            <td width=20%>
                <table width=100%>
                    <tr>
                        <th><h2>Edit</h2></th>
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
                    <legend><h3>PROFILE</h3></legend>
                    <form method="post" action="editCheck.php">
                        <table border="0" width=100%>
                            <tr>
                                <td width=12%>Name</td>
                                <td width=30%>
                                    <input type="text" name="#name" value="<?php echo isset($_SESSION['#name']) ? $_SESSION['#name'] : '' ?>">
                                </td>
                                <td rowspan="3" align="center">
                                </td>
                                <td width=40%></td>
                            </tr>
                            <tr height=0>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>
                                    <input type="email" name="#email" value="<?php echo isset($_SESSION['#email']) ? $_SESSION['#email'] : '' ?> ">
                                </td>
                                <td></td>
                            </tr>
                            <tr height=0>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>
                                    <input type="radio" name="#gender" <?php if(isset($_SESSION['#gender']) && $_SESSION['#gender']=='Male') echo "checked" ?> value="Male"/> Male
                                    <input type="radio" name="#gender" <?php if(isset($_SESSION['#gender']) && $_SESSION['#gender']=='Female') echo "checked" ?> value="Female"/> Female
                                    <input type="radio" name="#gender" <?php if(isset($_SESSION['#gender']) && $_SESSION['#gender']=='Other') echo "checked" ?> value="Other"/> Other <br>
                                </td>
                                <td></td>
                            </tr>
                            <tr height=0>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Date of Birth</td>
                                <td>
                                    <input type="date" name="#dob" value="<?php echo isset($_SESSION['#dob']) ? $_SESSION['#dob'] : '' ?>">
                                </td>
                                <td></td>
                            </tr>
                            <tr height=0>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" name="#submit" value="Submit">
                                </td>
                            </tr>                        
                            <tr>
                                <td colspan="2">
                                        <?php
                                            
                                            if(isset($_REQUEST['error'])) 
                                            {
                                                
                                                foreach ($_SESSION as $key => $value) {
                                                    if (!isset($_SESSION[$key]) or empty($value)) {
                                                        echo $key. " not set! <br>";     
                                                        break;                                               
                                                    }
                                                }
                                            }else if(isset($_REQUEST['dob']))
                                            {
                                                echo "You must be atleast 18 years old! <br>";
                                            }else if(isset($_REQUEST['email']))
                                            {
                                                echo "Email must be in valid format!! <br>";
                                            }
                                        ?>
                                </td>
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

<?php
    // print_r($_SESSION);
?>