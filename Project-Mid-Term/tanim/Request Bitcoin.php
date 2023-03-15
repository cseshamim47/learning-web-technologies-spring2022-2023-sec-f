<!DOCTYPE html>
<html>
  <head>
    <title>Request Bitcoin</title>
  </head>
  <body>
  <h1>Request Bitcoin</h1>
  <header style="text-align: right;">
  
      <nav>
       <a href="CurrencyConverter.php">Currency Converter</a>
        <a href="FAQ.php">FAQ</a>
        <a href="Request Bitcoin.php">Request Bitcoin</a>
        <a href="LearingPortal.php">Learing Portal</a>
        <a href="notification.php">Notification</a>
      </nav>
    </header>
    <?php
      if (isset($_POST['request'])) {
        $amount = $_POST['amount'];
        $recipient = $_POST['recipient'];
        $description = $_POST['description'];

        if (!empty($amount) && !empty($recipient)) {
          echo "Your request has been posted";
        } else {
          echo "You need to fill the form first";
        }
      }
    ?>
    <form method="post">
      <fieldset>
        <legend>Request Bitcoin</legend>
        <label for="amount">Amount (BTC):</label>
        <input type="number" id="amount" name="amount" step="0.00000001" required>
        <br>
        <label for="recipient">Recipient Email Address:</label>
        <input type="email" id="recipient" name="recipient" required>
        <br>
        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea>
        <br>
        <button type="submit" name="request">Request</button>
      </fieldset>
    </form>
  </body>
</html>
