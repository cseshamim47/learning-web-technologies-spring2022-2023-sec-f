<?php 
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



         $file = fopen('user.txt', 'r');
        $user_exists = false;
        $email_exists = false;
        while(!feof($file)){
            $data = fgets($file);
            
            $user = explode("|", $data);
            if($user[0] == $username){
                $user_exists = true;
                break;
            }
            else if ($user[3] == $email)
            {
                $email_exists = true;
                break;
            }
        }
        fclose($file);
        if($user_exists){
            echo "Username already exists.Try with different username!";
        }
        else if($email_exists){
            echo "This email is already used.Try with Another!";
        }
        else{
            
            $file = fopen('user.txt', 'a');
            $user = $username."|".$password."|".$name."|".$email."|".$gender."|".$dob."\r\n";
            fwrite($file, $user);
            fclose($file);
            header('location: login.php');
        }
          
        }
    }else{
        echo "invalid request...";
    }
?>