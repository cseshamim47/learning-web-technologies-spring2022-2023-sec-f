<?php 
    include 'db.php';
    
    session_start();
    if(isset($_REQUEST['submit'])){

     
        $username = $_REQUEST['username']; 
        $password = $_REQUEST['password']; 
        $email = $_REQUEST['email'];
        $gender = $_REQUEST['gender']; 
        $dob = $_REQUEST['dob'];
        $name = $_REQUEST['name'];
       
        $confirmpassword= $_REQUEST['confirmpassword'];
       

        if($username == "" || $password == "" ||empty($name)|| $email == "" || empty($gender)||empty($dob)) {
            echo "Null value ..";
            
        }
        elseif( $password != $confirmpassword  ) {
            echo "Password does not match";
            
        }
        elseif( strlen(trim($_REQUEST['password'])) < 8) {
            echo "Password must have at least 8 characters";
            
        }
        else if(strtotime($dob) > time()){
            echo "Date of birth cannot be greater than today's date";
        }
        
        

        else if(strtotime($dob) > strtotime("-16 years")){
            echo "You must be at least 16 years old to register";
        }
        else{

        
        $con = getConnection();
        
        $sql = "select username from user where username = '{$username}'";
        $result = mysqli_query($con, $sql);
        $user_exists = mysqli_fetch_assoc($result);
        // print_r($user_exists);
        $sql = "select email from user where email = '{$email}'";
        $result = mysqli_query($con, $sql);
        $email_exists = mysqli_fetch_assoc($result);
        
        if($user_exists){
            echo "Username already exists.Try with different username!";
        }
        else if($email_exists){
            echo "This email is already used.Try with Another!";
        }
        else{
            $sql = "INSERT INTO `user` (`username`, `password`, `name`, `email`, `gender`, `date`) VALUES ('{$username}', '{$password}', '{$name}', '{$email}', '{$gender}', '{$dob}')";
            $result = mysqli_query($con, $sql);
            
            if($result)
            {
                header('location: login.php');
                echo "registered!!";
            }else 
            {
                echo "something went wrong!!";
            }
            
        }
          
        }
    }else{
        echo "invalid request...";
    }
?>