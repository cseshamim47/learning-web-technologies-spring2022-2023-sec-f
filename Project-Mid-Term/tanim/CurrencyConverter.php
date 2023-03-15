<html>
    <head><title>Currency Converter</title></head>
    <body >
    <h1>Currency Converter</h1>
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
            <legend>Currency Converter</legend>
            <form action="CurrencyConverter.php" method="get">
        Enter BTC amount: <input type="text" name="input"/>
        <br>
        Select Currency: 
         <select name="dropdown">
            <!-- <option value="btc">BTC</option> -->
            <option value="usd">Us doller</option>
            <option value="euro">Euro</option>
            <option value="taka">Taka</option>
        
        </select>
        <br>
        <input type="submit" name= "sbmt" value="Convert"/>
        </form>
        <div align="center">
            <?php
                // PHP code to convert currency and display result 
                if(isset($_GET['sbmt']))
                {
                    $cc_input = $_GET['input'];
                    $cc_dropdown= $_GET['dropdown'];

                    if($cc_dropdown == 'usd')
                    {
                        $outoput = $cc_input * 24762.60;
                        echo "<h1>" . number_format($outoput, 2) . " Dollar" . "</h1>";
                    }
                   else if($cc_dropdown == 'euro')
                    {
                        $outoput = $cc_input * 23084.93;
                        echo "<h1>" . number_format($outoput, 2) . " Euro" . "</h1>";
                    }
                    if($cc_dropdown == 'taka')
                    {
                        $outoput = $cc_input * 2613479.47;
                        echo "<h1>" . number_format($outoput, 2) . " Taka" . "</h1>";
                    }
                }

            ?>
        </div>
        </fieldset>
        

        
    </body>
</html>
