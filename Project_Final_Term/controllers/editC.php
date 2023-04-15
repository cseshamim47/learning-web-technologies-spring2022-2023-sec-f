<?php 
     include '../models/db.php';
     $con = getConnection();
     $query = "select * from user where username='{$_REQUEST['username']}'";
     $result = mysqli_query($con,$query);
     $row = mysqli_fetch_assoc($result);
     $query = "UPDATE user SET name='{$_REQUEST['name']}',username='{$row['name']}',password='{$_REQUEST['password']}',email='{$_REQUEST['name']}',gender='{$_REQUEST['gender']}',dob='{$_REQUEST['dob']}',publicKey='{$row['publicKey']}',privateKey='{$row['privateKey']}',balance='{$row['balance']}' WHERE username = '{$ro}'";

?>