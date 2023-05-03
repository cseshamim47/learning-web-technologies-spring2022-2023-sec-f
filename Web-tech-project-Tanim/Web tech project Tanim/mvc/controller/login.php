<?php
// This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location:../views/welcome.php");
    exit;
}

require_once "../models/config.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


    if(empty($err))
    {
        if ($username === 'admin' && $password === 'admin') {
            // this means the username and password are correct
            // allow user to login as admin
            session_start();
            $_SESSION["username"] = $username;
            $_SESSION["loggedin"] = true;

            //Redirect user to admin dashboard
            header("location:../views/admin_dashboard.php");
            exit();
        } else {
            // prepare a SQL statement to select the user from the `users` table
            $sql = "SELECT id, username, password FROM users WHERE username = ?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            $param_username = $username;

            // try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is correct
                            // allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location:../views/welcome.php");
                            exit();
                        }
                        else{
                            $err = "Incorrect username or password";
                        }
                    }
                }
                else{
                  $err = "Incorrect username or password";
                }
            }
            else{
                $err = "Something went wrong. Please try again later.";
            }
        }
    }
}

?>


<!doctype html>
<html lang="en">
  <head>
   

    <title>PHP login system!</title>
  </head>
  <body>
 

</nav>


<style>
 fieldset {
    position: relative;
    top: 50%;
    transform: translateY(50%);
    width: 50%;
    margin: auto;
    border: 2px solid #ccc;
    border-radius: 5px;
    background-color: #ADD8E6; /* Change to a light blue color */
    background-color: rgba(173, 216, 230, 0.9); /* Increase opacity to 0.9 */
    padding: 20px;
  }
</style>

<fieldset>
  <legend><h3>Please Login Here:</h3></legend>
  <form action="" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">Username</label>
      <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
      <?php
        echo $err."<br>";
      ?>
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
  </form>
</fieldset>







    
  </body>
</html>
