<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
</head>
<body>
  <header style="text-align: right;">
  
      <nav>
      <a href="../views/admin_dashboard.php">Dashboard</a>    
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
	<fieldset>
		<legend>Admin Dashboard</legend>

		<a href="../controller/admin_notification_form.php">Admin Notification Panel</a>
    <br>
        <br>
		<a href="../controller/add_product.php">Add product</a>
<br> 
<br>
<a href="../controller/admin_faq.php">Post Frequently Asked Question</a>
<br>
<br>

        <form action="../controller/logout.php" method="post">
    <input type="submit" name="logout" value="Logout">
</form>
	</fieldset>
</body>
</html>
