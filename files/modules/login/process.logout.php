<?php

	//Session Starts
	session_name("nautilus");
	session_start();


	session_destroy();

	// $_SESSION['meli'] = false;
 //   unset($_SESSION['meli_code']);
 //   unset($_SESSION['meli_access_token']);
 //   unset($_SESSION['meli_refresh_token']);
 //   unset($_SESSION['meli_expires_in']);
 //   $DB->execQuery("UPDATE","admin_user","meli=0,meli_access_token='',meli_refresh_token='', meli_code='',meli_expires_in='0'","admin_id=".$_SESSION['admin_id']);
 //   header("Location: ../main/main.php");

	// //Unset Cookies
	// setcookie("nautilus", "", 0 ,"/");
	// setcookie("user", "", 0 ,"/");
	// setcookie("password", "", 0 ,"/");
	// setcookie("admin_id", "", 0 ,"/");
	// setcookie("profile_id", "", 0 ,"/");
	// setcookie("first_name", "", 0 ,"/");
	// setcookie("last_name", "", 0 ,"/");
	// setcookie("password", "", 0 ,"/");

	// Redirect
	header("Location: ../login/login.php?error=".$_GET['error']);

?>
