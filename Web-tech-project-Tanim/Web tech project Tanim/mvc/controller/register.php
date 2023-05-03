<?php
require_once "../models/config.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // Check if username is empty 
     $sql = "SELECT id FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
        echo "<script>alert('$username_err');</script>";
    }
    else{
       
       
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param username
            $param_username = trim($_POST['username']);

            // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $username_err = "This username is already taken"; 
                    echo "<script>alert('$username_err');</script>";
                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else{
                echo "<script>alert('Something went wrong');</script>";
            }
        }
    }

    mysqli_stmt_close($stmt);


    // Check for password
    if(empty(trim($_POST['password']))){
        $password_err = "Passwords can not be blank";
        echo "<script>alert('$password_err');</script>";
    }
    elseif(strlen(trim($_POST['password'])) < 5){
        $password_err = "Passwords can not be less than 5 character";
        echo "<script>alert('$password_err');</script>";
    }
    else{
        $password = trim($_POST['password']);
    }

    // Check for confirm password field
    if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
        $confirm_password_err = "Passwords should match";
        echo "<script>alert('$confirm_password_err');</script>";
    }



    // If there were no errors, go ahead and insert into the database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
    {
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt)
        {
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

            // Set these parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT);

            // Try to execute the query
            if (mysqli_stmt_execute($stmt))
            {
                header("location: ../controller/login.php");
            }
            else{
                echo "<script>alert('Something went wrong... cannot redirect!');</script>";
            }
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($conn);
}


?>





<!doctype html>
<html lang="en">
  <head>
    <title>Registration</title>
  </head>
  <body>

<style> 
  fieldset {
    position: relative;
    top: 50%;
    transform: translateY(50%);
    width: 50%;
    margin: auto;
    border: 2px solid #ccc;
    border-radius: 5px;
    background-color: #ADD8E6; 
    background-color: rgba(173, 216, 230, 0.9); 
    padding: 20px;
  }
</style>






<fieldset>
  <legend><h3>Please Register Here:</h3></legend>
  <form action="" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputUsername">Username</label>
      <input type="text" class="form-control" name="username" id="inputUsername" placeholder="username">
      <br>
      <?php
         echo $username_err."<br>";
      ?>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name ="password" id="inputPassword4" placeholder="Password">
      <?php
        echo $password_err."<br>";
      ?>
    </div>
  </div>
  <div class="form-group">
      <label for="inputPassword4">Confirm Password</label>
      <input type="password" class="form-control" name ="confirm_password" id="inputPassword" placeholder="Confirm Password">
      <br>
      <?php
          echo $confirm_password_err."<br>";
      ?>
    </div>
 
 
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
</div></fieldset>

  </body>
</html>
