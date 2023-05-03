<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "blockchain");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get all the faqs from the database
$sql = "SELECT * FROM faq";
$result = mysqli_query($conn, $sql);

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>

<head>
    <title>User FAQ</title>
    
    
    <style>
         fieldset {
   
    margin: auto;
    border: 2px solid #ccc;
    border-radius: 5px;
    background-color: #ADD8E6; /* Change to a light blue color */
    background-color: rgba(173, 216, 230, 0.9); /* Increase opacity to 0.9 */
    padding: 20px;
  }
    </style>
</head>

<body>
       
    <fieldset>
        <legend>FAQ</legend>
        <?php
        // If there are no faqs, display a message
        if (mysqli_num_rows($result) == 0) {
            echo "No FAQs yet!";
        } else {
            // Loop through each faq and display it
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<p><strong>Q: " . $row["question"] . "</strong></p>";
                echo "<p>A: " . $row["answer"] . "</p>";
            }
        }
        ?>
    </fieldset>
</body>

</html>
