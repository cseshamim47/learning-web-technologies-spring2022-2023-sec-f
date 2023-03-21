<?php 
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

            $file = fopen('specification.txt', 'a');
            $data = $name."|".$role."|".$screendefination."|".$userstory."|".$criteria."|".$filename."|".$tags."\r\n";
            fwrite($file, $data);
            header('location: createspecification.php');
        
    }else{
        echo "invalid request...";
    }
?>