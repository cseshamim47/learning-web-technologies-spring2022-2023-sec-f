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
                <form action="">
                    <fieldset>
                        <legend>Login</legend>
                        <table align="center" >
                            
                            <tr height=40px>
                                <td>
                                    Username : 
                                </td>
                                <td>
                                    <input type="text" name="username">
                                </td>
                            </tr>
                            <tr height=40px>
                                <td width=90px>
                                    Password : 
                                </td>
                                <td>
                                    <input type="password" name="password">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="checkbox" name="rememberMe" value="1">
                                    Remember Me 
                                    <br><br>
                                </td>
                                
                            </tr>

                            <tr>
                                <td colspan="2">
                                <input type="submit" name="" value="Login"> 
                                <a href="forgotPassword.php"><i>Forgot Password?</i></a>           
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