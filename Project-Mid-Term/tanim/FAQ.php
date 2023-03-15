<!DOCTYPE html>
<html>
  <head>
    <title>FAQ - Bitcoin</title>
  </head>
  <body>
    <h1>FAQ</h1>
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
      <legend>FAQ</legend>
      <?php
        $questions = array(
          "What is Bitcoin?" => "Bitcoin is a digital currency that allows for peer-to-peer transactions without the need for a centralized authority.",
          "How does Bitcoin work?" => "Bitcoin transactions are verified and processed by a decentralized network of computers using complex algorithms. Transactions are recorded on a public ledger called the blockchain.",
          "Who invented Bitcoin?" => "Bitcoin was invented by an anonymous person or group using the pseudonym Satoshi Nakamoto.",
          "How do I get Bitcoin?" => "You can get Bitcoin by buying it on a cryptocurrency exchange, accepting it as payment for goods or services, or mining it using specialized software and hardware.",
          "Is Bitcoin legal?" => "The legal status of Bitcoin varies by country. In some countries, it is legal to use Bitcoin as a form of payment or investment, while in others it is restricted or banned outright.",
          "How secure is Bitcoin?" => "Bitcoin is secured by advanced cryptographic algorithms and the decentralized network of computers that verify and process transactions. However, like any digital asset, it is vulnerable to hacking and theft if proper security measures are not taken.",
          "Can I lose my Bitcoin?" => "Yes, if you lose your private key or your Bitcoin is stolen, you can lose your Bitcoin permanently. It is important to take steps to secure your Bitcoin and store it in a secure wallet.",
          "What is blockchain?" => "Blockchain is a decentralized ledger that records all Bitcoin transactions in chronological order. Each block on the blockchain contains a list of transactions and a unique cryptographic signature, creating a secure and immutable record of all Bitcoin activity.",
          "What is a cryptocurrency wallet?" => "A cryptocurrency wallet is a digital wallet that allows you to store, send, and receive cryptocurrencies like Bitcoin. There are many different types of wallets, including hardware wallets, software wallets, and web wallets.",
          "How do I store my Bitcoin safely?" => "You can store your Bitcoin safely by using a secure wallet, keeping your private key secret, and taking other security measures like using two-factor authentication and avoiding public Wi-Fi networks.",
          "How do I sell Bitcoin?" => "You can sell Bitcoin on a cryptocurrency exchange or through a peer-to-peer marketplace. The process will vary depending on the platform you use.",
          "What are the fees for using Bitcoin?" => "The fees for using Bitcoin vary depending on the transaction size and the congestion of the network. Fees are paid to miners to incentivize them to verify and process transactions.",
          "Is Bitcoin a good investment?" => "Bitcoin has been highly volatile and its value has fluctuated widely over time. It is important to carefully consider the risks and potential rewards before investing in Bitcoin or any other cryptocurrency.",
          "How can I learn more about Bitcoin?" => "There are many resources available to learn more about Bitcoin, including online tutorials, forums, and books. It is also helpful to stay up-to-date on the latest news and developments in the industry.",
        );
        
        foreach ($questions as $question => $answer) {
          echo "<h2>$question</h2>";
          echo "<p>$answer</p>";
        }
      ?>
    </fieldset>
  </body>
</html>
