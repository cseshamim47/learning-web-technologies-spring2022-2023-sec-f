<?php 
    include 'db.php';
    session_start();
    if(isset($_REQUEST['submit'])){

        
        $name = $_REQUEST['name']; 
        $role = $_REQUEST['role']; 
       
        $screendefination = $_REQUEST['screendefination']; 
        $userstory =$_REQUEST['story'];
        $criteria =$_REQUEST['criteria'];
        $tags =$_REQUEST['tags'];
        $filename = $_FILES['file']['name'];

        $tempname = $_FILES['file']['tmp_name'];
    
         move_uploaded_file($tempname,$filename);

            // $file = fopen('specification.txt', 'a');
            $con = getConnection();
            $sql = "INSERT INTO `spec` (`name`, `role`, `sd`, `story`, `ac`, `ui`, `tag`) VALUES ('{$name}', '{$role}', '{$screendefination}', '{$userstory}', '{$criteria}', '{$filename}', '{$tags}')";
            $result = mysqli_query($con, $sql);
            // $user_exists = mysqli_fetch_assoc($result);
            // $data = $name."|".$role."|".$screendefination."|".$userstory."|".$criteria."|".$filename."|".$tags."\r\n";
            // fwrite($file, $data);
            if($result)
            {
                header('location: createspecification.php');
            }else
            {
                echo "something went wrong!!";
                exit;
            }
        
    }else{
        echo "invalid request...";
    }
?>