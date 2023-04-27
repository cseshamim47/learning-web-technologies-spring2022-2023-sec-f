<?php 

    require_once('db.php');

    function addTrx($sender,$receiver,$amount)
    {
        $con = getConnection();
        $trxId = 'trx'.time(); 
        $query = "INSERT INTO transaction(trxId, sender, receiver, amount) VALUES ('{$trxId}','{$sender}','{$receiver}','{$amount}')";

        $result = mysqli_query($con,$query);

        return $result;
    }

    // addTrx('shamim','shakil',123);

?>