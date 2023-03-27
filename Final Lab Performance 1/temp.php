<?php 

    $con = mysqli_connect('127.0.0.1', 'root', '', 'spec');
    $sql = "select * from user";
    $result = mysqli_query($con, $sql);
    while($row = mysqli_fetch_assoc($result)){
        print_r($row); echo "<br>";
    }
    //print_r($result);
    //$user = mysqli_fetch_assoc($result);
    //print_r($user);
    


?>