


<!DOCTYPE html>
<html>
<head>
	<title>User Dashboard</title>
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
		<legend>User Dashboard</legend>
		<ul>
			<li><a href="../views/user_notification.php">Notification</a></li>
			<li><a href="../views/shop.php">Shop</a></li>
      <li><a href="../views/cart.php">cart</a></li>
			<li><a href="../views/cc.php">Currency Converter</a></li>
      <li><a href="../controller/faq_user.php">FAQ</a></li>
      <li><a href="../views/learingPortal.php">Learing Portal</a></li> 
		</ul>
        <form action="../controller/logout.php" method="post">
    <input type="submit" name="logout" value="Logout">
</form>

	</fieldset>
</body>
</html>
