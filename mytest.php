<!DOCTYPE html>
<html>
  <head>
    <title>Display Name</title>
  </head>
  <body>
    <form method="post" action="">
      <label for="name">Enter your name:</label>
      <input type="text" name="name" id="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>">
      <button type="submit">Submit</button>
    </form>
    
    <?php
      if (isset($_POST['name'])) {
        $name = $_POST['name'];
        echo "<p>Your name is: $name</p>";
      }
    ?>
    
  </body>
</html>
