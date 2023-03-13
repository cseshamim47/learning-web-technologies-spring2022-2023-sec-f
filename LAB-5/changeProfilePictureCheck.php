<?php
session_start();
if (isset($_REQUEST["submit"])) {
	if (isset($_FILES["profilePicture"]) && !empty($_FILES["profilePicture"]["name"])) {
		$target_file = basename($_FILES["profilePicture"]["name"]);
        $_SESSION['#profilePicture'] = $target_file;	
		include 'updateFile.php';
	} 
} 
header('Location: changeProfilePicture.php');

?>