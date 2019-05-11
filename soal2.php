<?php 
	$polausername = "/a-z/";
	$username = $_POST['username'];

	$polaemail = "^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$";
	$email = $_POST['email'];

	if (preg_match($polausername, $username) && strlen($username)==8) {
		return true;
	} else {
		return false;
	}

	if (preg_match($polaemail, $email) && strlen($email)>=4) {
		return true;
	} else {
		return false;
	}

?>