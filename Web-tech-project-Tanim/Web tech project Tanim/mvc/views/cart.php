<?php
	// Starting the session
	session_start();

	// Database connection
	$conn = mysqli_connect("localhost", "root", "", "project");

	if(isset($_POST['remove_from_cart'])) {
		// Removing product from the cart
		$product_id = $_POST['product_id'];
		unset($_SESSION['cart'][$product_id]);

		// Removing product from the cart table in the database
		$sql = "DELETE FROM cart WHERE product_id = '$product_id'";
		mysqli_query($conn, $sql);

		//echo "Product removed from cart.";
        echo "<script>alert('Product removed from the cart');</script>";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
</head>
<body>
<header style="text-align: right;">
  
  <nav>
    <a href="../views/user_dashboard.php">Dashboard</a>
    <a href="../views/shop.php">Shop Products</a>
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
		<legend>Cart</legend>
		<?php
			// Displaying products in the cart
			if(isset($_SESSION['cart'])) {
				echo "<table>";
				echo "<tr><th>Product Name</th><th>Product Quantity</th><th>Remove from Cart</th></tr>";

				foreach($_SESSION['cart'] as $product_id => $quantity) {
					$sql = "SELECT * FROM products WHERE id = $product_id";
					$result = mysqli_query($conn, $sql);
					$row = mysqli_fetch_assoc($result);

					echo "<tr><td>" . $row["product_name"] . "</td><td>" . $quantity . "</td><td>";
					echo "<form method='POST' action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "'>";
					echo "<input type='hidden' name='product_id' value='" . $row["id"] . "'>";
					echo "<input type='submit' name='remove_from_cart' value='Remove'>";
					echo "</form>";
					echo "</td></tr>";
				}

				echo "</table>";
			} else {
				echo "Cart is empty.";
			}
		?>
	</fieldset>
</body>
</html>
