<?php
	session_start();

	if(!session_check(['id', 'login_user']) && strpos($_SERVER["REQUEST_URI"],"login.php") === false && strpos($_SERVER["REQUEST_URI"],"register.php") === false ) {
		header("Location: ../login/login.php");
	}

	$userId = (isset($_SESSION['id'] )) ?  $_SESSION['id']: '' ;
	$loginSession = (isset($_SESSION['login_user'] )) ? $_SESSION['login_user'] : '';

?>
