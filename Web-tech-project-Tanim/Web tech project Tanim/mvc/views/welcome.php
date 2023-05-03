<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: ../controller/login.php");
}


?>


<!doctype html>
<html lang="en">
  <head>
   

    <title>Welcome</title>
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
    background-color: #ADD8E6; /* Change to a light blue color */
    background-color: rgba(173, 216, 230, 0.9); /* Increase opacity to 0.9 */
    padding: 20px;
  }
</style>
<fieldset>
  <legend>Feature</legend>
  <br>
  <h3><?php echo "Welcome ". $_SESSION['username']?>! You can now use this website</h3>
  <li class="nav-item">
        <a class="nav-link" href="../views/user_dashboard.php">Dashboard</a>
      </li>
      <br>
      <form action="../controller/logout.php" method="post">
    <input type="submit" name="logout" value="Logout">
</fieldset>

  </body>
</html>
