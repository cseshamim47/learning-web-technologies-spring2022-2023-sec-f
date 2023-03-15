<?php
session_start();
if (isset($_REQUEST["submit"])) {
	if (isset($_FILES["profilePicture"]) && $_FILES["profilePicture"]["error"] == 0 && !empty($_FILES["profilePicture"]["name"])) {
		$target_dir = "../includes/";
		$target_file = basename($_FILES["profilePicture"]["name"]);
		move_uploaded_file($_FILES["profilePicture"]["tmp_name"], $target_dir.$target_file);
		$checkExtension = explode('.',$target_file);
		$extension = $checkExtension[count($checkExtension)-1];
		if($extension == 'jpeg' || $extension == 'png' || $extension == 'jpg')
		{
			$_SESSION['#profilePicture'] = $target_file;	
			include '../repeat/updateFile.php';
			header('Location: changeProfilePicture.php');
		}else
		{
			header('Location: changeProfilePicture.php?error');
		}
		// echo $_SESSION['#profilePicture'];
		// echo $extension;	
	} 

} 

?>