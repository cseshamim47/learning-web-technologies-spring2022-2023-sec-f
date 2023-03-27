<?php 
    include 'db.php';
    session_start();
    if(isset($_REQUEST['submit'])){

        
        $username = $_REQUEST['username']; 
        $password = $_REQUEST['password']; 
        $rememberme = isset($_REQUEST['rememberme']);

        if($username == "" && $password == "") {
            
            header('location: login.php');
        }
        else{
            
            $con = getConnection();
        
            $sql = "select username from user where username = '{$username}' and password = '{$password}'";
            $result = mysqli_query($con, $sql);
            $user_exists = mysqli_fetch_assoc($result);
            
            if($user_exists)
            {
                $sql = "select * from user where username = '{$username}'";
                $result = mysqli_query($con, $sql);
                $user = mysqli_fetch_assoc($result);
                
                // echo "<pre>";
                // print_r($user);
                $_SESSION['username'] = $user['username'];
                $_SESSION['password']=$user['password'];
                $_SESSION['name']=$user['name'];
                $_SESSION['email']=$user['email'];
                $_SESSION['gender']=$user['gender'];
                $_SESSION['dob']=$user['date'];
                 
                setcookie('flag', 'asif', time()+300, '/');
            
                header('location: createspecification.php');                    
                       
            }
                
            echo "invalid credentials!!";
                
        }
    }else{
        echo "invalid request...";
    }
?>