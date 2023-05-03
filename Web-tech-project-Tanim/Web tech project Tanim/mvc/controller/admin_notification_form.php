<!DOCTYPE html>
<html>
	<head>
		<title>Admin Notification</title>
		<script>
			// Show update form
			function showUpdateForm(id, notification) {
				document.getElementById("updateId").value = id;
				document.getElementById("updateNotification").value = notification;
				document.getElementById("updateForm").style.display = "block";
			}
		</script>
	</head>
	<body>
		<h1>Admin Notification</h1>
		<header style="text-align: right;">
  
  <nav>
  <a href="../views/admin_dashboard.php">Admin Dashboard</a>    
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
    background-color: #ADD8E6; 
    background-color: rgba(173, 216, 230, 0.9); 
    padding: 20px;
  }
  .success {
            color: red;
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

			// Insert notification
			if (isset($_POST['submit'])) {
				$notification = $_POST['notification'];

				$sql = "INSERT INTO notifications (notification) VALUES ('$notification')";

				if (mysqli_query($conn, $sql)) {
                  
					echo"<span class='success'>Notification inserted successfully</span>";
				} else {
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
			}

			// Delete notification
			if (isset($_GET['delete'])) {
				$id = $_GET['delete'];

				$sql = "DELETE FROM notifications WHERE id=$id";

				if (mysqli_query($conn, $sql)) {
				
					echo"<span class='success'>Notification Deleted successfully</span>";
				} else {
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
			}

			// Update notification
			if (isset($_POST['update'])) {
				$id = $_POST['id'];
				$notification = $_POST['notification'];

				$sql = "UPDATE notifications SET notification='$notification' WHERE id=$id";

				if (mysqli_query($conn, $sql)) {
					
					echo"<span class='success'>Notification Updated successfully</span>";

				} else {
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
			}
		?>

		<!-- Insert notification form -->
		<form method="POST" action="">
			<fieldset>
				<legend>Insert notification</legend>
				<label>Notification:</label>
				<input type="text" name="notification" required>
				<br>
				<br>
				<input type="submit" name="submit" value="Post notification">
			</fieldset>
		</form>

		<br>

		<!-- Show all notifications -->
		<fieldset>
			<legend>All notifications</legend>
			<?php
				$sql = "SELECT * FROM notifications ORDER BY id DESC";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						$id = $row['id'];
						$notification = $row['notification'];

						echo "<p>$notification 
								<a href='../controller/admin_notification_form.php?delete=$id'>Delete</a>
								<button onclick='showUpdateForm($id, \"$notification\")'>Update</button>
							  </p>";
					}
				} else {
					echo "No notifications found";
				}
			?>
		</fieldset>

		<br>

<!-- Update notification form (hidden by default) -->
<div id="updateForm" style="display:none;">
	<form method="POST" action="">
		<fieldset>
			<legend>Update notification</legend>
			<input type="hidden" name="id" id="updateId">
			<label>Notification:</label>
			<input type="text" name="notification" id="updateNotification" required>
			<br>
			<input type="submit" name="update" value="Update notification">
			<button onclick="document.getElementById('updateForm').style.display = 'none';">Cancel</button>
		</fieldset>
	</form>
</div>


   <?php
	mysqli_close($conn);
   ?>
  </body>
</html>