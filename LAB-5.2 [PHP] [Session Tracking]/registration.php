<html>
<head>
    <title>Home</title>
</head>
<body>
    <table border="1" width=100%>
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

        <tr height="200px">
            <td width=20%></td>
            <td>
                <form type="post" action="registrationDone.php">
                    <fieldset>
                        <legend>Registration</legend>
                        <table align="center" >
                            <tr height=40px>
                                <td width=50%>
                                    Name : 
                                </td>
                                <td>
                                    <input type="text" name="name" value="">
                                </td>
                            </tr>
                            <tr height=40px>
                                <td>
                                    Email : 
                                </td>
                                <td>
                                    <input type="email" name="email">
                                </td>
                            </tr>
                            <tr height=40px>
                                <td>
                                    Username : 
                                </td>
                                <td>
                                    <input type="text" name="username">
                                </td>
                            </tr>
                            <tr height=40px>
                                <td>
                                    Password : 
                                </td>
                                <td>
                                    <input type="password" name="password">
                                </td>
                            </tr>
                            <tr height=40px>
                                <td>
                                    Confirm Password : 
                                </td>
                                <td>
                                    <input type="password" name="confirmPassword">
                                </td>
                            </tr>
                            <tr height=40px>
                                <td>
                                    Confirm Password : 
                                </td>
                                <td>
                                    <input type="password" name="confirmPassword">
                                </td>
                            </tr>
                            <tr height=40px>
                                <td colspan="2">
                                    <form method="post" action="" enctype="">
                                        <fieldset>
                                            <legend>Gender</legend>
                                            <input type="radio" name="Gender" value="Male"/> Male
                                            <input type="radio" name="Gender" value="Female"/> Female
                                            <input type="radio" name="Gender" value="Other"/> Other <br>
                                        </fieldset>
                                    </form>
                                </td>
                            </tr>
                            <tr height=100px>
                                <td colspan="2">
                                    <form method="post" action="" enctype="">
                                        <fieldset>
                                            <legend>Date of Birth</legend>
                                            <input type="date" name="date" value=""/>
                                        </fieldset>
                                    </form>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                <input type="submit" name="submit" value="Submit">            
                                <input type="reset" name="" value="Reset">
                                </td>              
                            </tr>
                        </table>
                    </fieldset>

                </form>

            </td>
            <td width=20%></td>
        </tr>
        
        <tr height="80px">
            <td colspan="3" align="center">
                <p>copytight © 2023</p>
            </td>
        </tr>
    </table>
</body>
</html>