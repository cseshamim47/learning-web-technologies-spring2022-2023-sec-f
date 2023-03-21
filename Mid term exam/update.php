<html>
<body>
    <title>Update</title>
<table border="1">
            <tr>
                <th>Specification Name</th>
                <th>Role</th>
                <th>Screen Defination</th>
                <th>User Stroy</th>
                <th>Acceptance Criteria</th>
                <th>UI Screen</th>
                <th>Tags</th>
                <th>Action</th>
            </tr>
        <?php 
            $file = fopen('specification.txt', 'r');
            $sr=1;

            while(!feof($file)){
                $data = fgets($file);
                $user = explode('|', $data);
                if(count($user) > 1){
        ?>
            <tr>
                
                <td><?=$user[0]?></td>
                <td><?=$user[1]?></td>
                <td><?=$user[2]?></td>
                <td><?=$user[3]?></td>
                <td><?=$user[4]?></td>
                <td><img src="<?=$user[5]?>" height="80" width="120"  ></td>
                <td><?=$user[6]?></td>
              
                <td>
                     
                    <a href="update.php"> Update </a>
                </td>
            </tr>
           
        <?php 
            }
            $sr++; 
        } ?>
        </table>
        <h1></h1>
            <a href="createspecification.php">Back</a>
</body>
</html>