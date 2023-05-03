<!DOCTYPE html>
<html>
	<head>
		<title>User Notification</title>
	
	</head>
	<body>
		
		<header style="text-align: right;">
  
  <nav>
  <a href="../views/user_dashboard.php">Dashboard</a>    
  </nav>
</header>
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
        <?php
   	// Database connection
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "project";

       $conn = mysqli_connect($servername, $username, $password, $dbname);

       if (!$conn) {
           die("Connection failed: " . mysqli_connect_error());
       }
       ?>
		
		<!-- Show all notifications -->
		<fieldset>
			<legend><h1>Notification</h1></legend>
			<?php
				$sql = "SELECT * FROM notifications ORDER BY id DESC";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						$id = $row['id'];
						$notification = $row['notification'];

						echo "<p>$notification 
							  </p>";
					}
				} else {
					echo "No notifications found";
				}
			?>
		</fieldset>

		

   <?php

	mysqli_close($conn);
   ?>
  </body>
</html>