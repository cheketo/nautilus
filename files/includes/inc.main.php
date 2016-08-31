<?php
	session_name("nautilus");
	session_cache_expire(15800);
	session_start();

	include_once("../../classes/class.database.php");
	
	/* CONNECTION STARTS */
	$DB = new DataBase();

	/* REDIRECTS IF THERE WAS AN ERROR */
	if(!$DB->Connect())
	{
		header("Location: ../../includes/inc.error.php?error=".$DB->Error);
		die();
	}
	
	include_once("../../classes/class.api.rest.php");
	include_once("../../functions/func.common.php");
	include_dir("../../classes");

	/* MELI REDIRECT URL */
	$MeliURL = 'https://nautilus-cheketo.c9users.io/files/modules/login/process.login.php';
	/* MELI NOTIFICATIONS URL */
	$MeliNotificationsURL = 'https://nautilus-cheketo.c9users.io/files/modules/main/process.meli.notifications.php';
	
	$_SESSION['meli_application_id']	= 1153986830050189;
	$_SESSION['meli_secret']			= "KNQNPi2CfAevSwn8tJD7PXou4Y4TFyHN";
	
	if($_SESSION['meli'])
	{
		$Meli = new Meli($_SESSION['meli_application_id'],$_SESSION['meli_secret'],$_SESSION['meli_access_token'],$_SESSION['meli_refresh_token']);
		if($_SESSION['meli_refresh_token'])
		{
			$Meli->refreshMeliToken();
		}
	}

	/* ADDING SLASHES TO PUBLIC VARIABLES */
	$_POST	= AddSlashesArray($_POST);
	$_GET	= AddSlashesArray($_GET);

	/* SETTING HEAD OF THE DOCUMENT */
	$Head	= new Head();
	$Head	-> setFavicon("../../../skin/images/body/icons/favicon.png");

	/* SETTING FOOT OF THE DOCUMENT */
	$Foot	= new Foot();
?>
