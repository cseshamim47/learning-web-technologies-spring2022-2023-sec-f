<?php
    session_start();
?>

<html>
<head>
    <title>Registration</title>
</head>
<body>
    <!-- header -->
    <?php include '../repeat/header.php';  ?>
        <!-- body -->
        <tr height="200px">
            <td width=20%></td>
            <td>
                <form method="post" action="registrationCheck.php">
                    <fieldset>
                        <legend>Registration</legend>
                        <table align="center" >
                            <tr height=40px>
                                <td width=50%>
                                    Name : 
                                </td>
                                <td>
                                    <input type="text" name="name" value="<?php echo isset($_SESSION['name']) ? $_SESSION['name'] : ''  ?>">
                                </td>
                            </tr>
                            <tr height=40px>
                                <td>
                                    Email : 
                                </td>
                                <td>
                                    <input type="email" name="email" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''  ?>">
                                </td>
                            </tr>
                            <tr height=40px>
                                <td>
                                    Username : 
                                </td>
                                <td>
                                    <input type="text" name="username" value="<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''  ?>">
                                </td>
                            </tr>
                            <tr height=40px>
                                <td>
                                    Password : 
                                </td>
                                <td>
                                    <input type="password" name="password" value="<?php echo isset($_SESSION['password']) ? $_SESSION['password'] : ''  ?>">
                                </td>
                            </tr>
                            <tr height=40px>
                                <td>
                                    Confirm Password : 
                                </td>
                                <td>
                                    <input type="password" name="confirmPassword" value="<?php echo isset($_SESSION['confirmPassword']) ? $_SESSION['confirmPassword'] : ''  ?>">
                                </td>
                            </tr>
                            <tr height=40px>
                                <td colspan="2">
                                        <fieldset>
                                            <legend>Gender</legend>
                                            <input type="radio" name="gender" <?php if(isset($_SESSION['gender']) && $_SESSION['gender']=='Male') echo "checked" ?> value="Male"/> Male
                                            <input type="radio" name="gender" <?php if(isset($_SESSION['gender']) && $_SESSION['gender']=='Female') echo "checked" ?> value="Female"/> Female
                                            <input type="radio" name="gender" <?php if(isset($_SESSION['gender']) && $_SESSION['gender']=='Other') echo "checked" ?> value="Other"/> Other <br>
                                        </fieldset>
                                </td>
                            </tr>
                            <tr height=100px>
                                <td colspan="2">
                                        <fieldset>
                                            <legend>Date of Birth</legend>
                                            <input type="date" name="dob" value="<?php echo isset($_SESSION['dob']) ? $_SESSION['dob'] : ''  ?>"/>
                                        </fieldset>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                <input type="submit" name="submit" value="Submit">            
                                <input type="submit" name="reset" value="Reset">
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
                                                }
                                            }
                                            if(isset($_SESSION['password']) && $_SESSION['password'] != $_SESSION['confirmPassword'] )                                
                                            {
                                                echo "password does not match!!! <br>";
                                            }else if(isset($_SESSION['password']) && !empty($_SESSION['password']))
                                            {
                                                if (!preg_match('/^(?=.*[A-Z])(?=.*[\W])(?=.{5,})/', $_SESSION['password'])) {
                                                    echo "Use a stronger password. [1 special char, 1 uppercase, minimum length 5] <br>";
                                                }
                                            }
                                            if(!isset($_SESSION['gender']))
                                            {
                                                echo "gender not set! <br>";
                                            }   
                                            if(isset($_SESSION['email']) && !empty($_SESSION['email']))
                                            {
                                                if (!filter_var($_SESSION['email'], FILTER_VALIDATE_EMAIL)) {
                                                    echo "Email address is not valid <br>";
                                                }
                                            }

                                            if(isset($_SESSION['dob']) && !empty($_SESSION['dob']))
                                            {
                                                $dateString = $_SESSION['dob']; // A date of birth to check
                                                $dateString = explode('-',$dateString);
                                                print_r($dateString);
                                                // get the users Date of Birth
                                                $BirthDay   = $dateString[2];
                                                $BirthMonth = $dateString[1];
                                                $BirthYear  = $dateString[0];

                                                //convert the users DoB into UNIX timestamp
                                                $stampBirth = mktime(0, 0, 0, $BirthMonth, $BirthDay, $BirthYear);

                                                // fetch the current date (minus 18 years)
                                                $today['day']   = date('d');
                                                $today['month'] = date('m');
                                                $today['year']  = date('Y') - 15;

                                                // generate todays timestamp
                                                $stampToday = mktime(0, 0, 0, $today['month'], $today['day'], $today['year']);
                                                echo $stampToday;
                                                if ($stampBirth > $stampToday) {
                                                    echo 'User is NOT 15 years old, sorry!';
                                                }
                                            }
                                        }else if(isset($_REQUEST['userExist']))
                                        {
                                            echo "username or email already exist!";
                                        }
                                                                                
                                    ?>
                                </td>              
                            </tr>
                        </table>
                    </fieldset>

                </form>

            </td>
            <td width=20%></td>
        </tr>


        <!-- footer -->
    <?php 
    
        include '../repeat/footer.php'; 
        unset($_REQUEST['error']);
        unset($_REQUEST['userExist']);
    
    ?>
        
</body>
</html>