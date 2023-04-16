<?php 
    require_once('db.php');
    function seeByUsername($name)
    {
        $con = getConnection();
        $query = "select * from user where username='{$name}'";
        $result = mysqli_query($con,$query);
        $row = mysqli_fetch_assoc($result);
        // print_r($result);
        return $row;
    }
    function seeByEmail($name)
    {
        $con = getConnection();
        $query = "select * from user where email='{$name}'";
        $result = mysqli_query($con,$query);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    function insertUser($name, $email, $username, $password, $gender, $dob, $image)
    {
        $con = getConnection();
        $publicKey = $username.'123';
        $privateKey = $username.'000';
        $query = "INSERT INTO user (name, username, password, email, gender, dob, publicKey, privateKey, balance, profilePicture) VALUES ('{$name}', '{$username}', '{$password}', '{$email}', '{$gender}', '{$dob}', '{$publicKey}', '{$privateKey}', '1000','{$image}')";
        $result = mysqli_query($con,$query);
        // $row = mysqli_fetch_assoc($result);
        return $result;
    }

    function updateUser($name, $email, $username, $password, $gender, $dob, $image)
    {
        $con = getConnection();
        $query = "update user set name='{$name}', password='{$password}', email='{$email}', gender='{$gender}', dob='{$dob}', profilePicture='{$image}' where  username='{$username}'";
        $result = mysqli_query($con,$query);
        // $row = mysqli_fetch_assoc($result);
        return $result;
    }


    // seeByUsername('shamim');
?>