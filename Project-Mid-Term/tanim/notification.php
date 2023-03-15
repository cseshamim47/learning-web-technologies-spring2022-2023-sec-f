<!DOCTYPE html>
<html>
<head>
  <title>Notification Panel</title>
</head>
<body>
<h1>Notification</h1>
  <header style="text-align: right;">
  
      <nav>
        <a href="CurrencyConverter.php">Currency Converter</a>
        <a href="FAQ.php">FAQ</a>
        <a href="Request Bitcoin.php">Request Bitcoin</a>
        <a href="LearingPortal.php">Learing Portal</a>
        <a href="notification.php">Notification</a>
      </nav>
    </header>
  <fieldset>
    <legend>Notification Panel</legend>
    <form method="post">
      <input type="submit" name="view_notifications" value="View all notifications">
    </form>
    <br>
    <?php
    if(isset($_POST['view_notifications'])) {
      $notifications = array(
        "New Bitcoin trading platform launched.",
        "Bitcoin price has reached a new all-time high.",
        "Bitcoin miner revenue has hit a new 6-month high.",
        "Bitcoin Lightning Network capacity has doubled in the last month.",
        "Bitcoin ATM installations have surpassed 30,000 worldwide.",
        "Bitcoin transaction fees have dropped to their lowest level in 6 months."
      );
      echo "<ol>";
      foreach($notifications as $index=>$notification) {
        echo "<li> ".$notification."</li>";
      }
      echo "</ol>";
    }
    ?>
  </fieldset>
</body>
</html>
