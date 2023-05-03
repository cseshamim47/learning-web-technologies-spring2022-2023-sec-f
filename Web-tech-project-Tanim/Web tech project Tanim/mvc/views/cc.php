<html>
    <head><title>Currency Converter</title></head>
    <body >
    <h1>Currency Converter</h1>
  <header style="text-align: right;">
  
      <nav>
      <a href="../views/user_dashboard.php">Dashboard</a>
      
      </nav>
    </header>
    <style>fieldset {
        border: 2px solid #ccc;
        border-radius: 5px;
        background-color: #ADD8E6; /* Change to a light blue color */
    background-color: rgba(173, 216, 230, 0.9); 
        padding: 20px;
      }
      div.result {
        color: red;
        font-size: 24px;
      }
</style>
        <fieldset>
            <legend>Currency Converter</legend>
            <form action="../views/cc.php" method="get">
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
        }
        else if($cc_dropdown == 'euro')
        {
            $outoput = $cc_input * 23084.93;
        }
        else if($cc_dropdown == 'taka')
        {
            $outoput = $cc_input * 2613479.47;
        }

        echo '<h1 style="color: red;">' . number_format($outoput, 2) . ' ' . ucfirst($cc_dropdown) . '</h1>';
    }
    ?>
</div>

        </fieldset>
        

        
    </body>
</html>
