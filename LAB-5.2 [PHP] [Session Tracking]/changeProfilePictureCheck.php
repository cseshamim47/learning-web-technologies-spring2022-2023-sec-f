<?php
session_start();
if (isset($_REQUEST["submit"])) {
	if (isset($_FILES["profilePicture"])) {
		$target_file = basename($_FILES["profilePicture"]["name"]);
        $_SESSION['profilePicture'] = $target_file;
	} 
}
header('Location: changeProfilePicture.php');
?>