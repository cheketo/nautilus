<?php

	/* INCLUDES */
	include("../../includes/inc.main.php");
    
	
	if($_GET['code'])
    {
		$_SESSION['meli_code'] = $_GET['code'];
		// If the code was in get parameter we authorize
		$UserML = $Meli->authorize($_SESSION['meli_code'], $MeliURL);
		$_SESSION['meli_access_token'] = $UserML['body']->access_token;
		$_SESSION['meli_expires_in'] = time() + $UserML['body']->expires_in;
		$_SESSION['meli_refresh_token'] = $UserML['body']->refresh_token;
		
		$Meli		= new Meli($_SESSION['meli_application_id'],$_SESSION['meli_secret'],$_SESSION['meli_access_token'],$_SESSION['meli_refresh_token']);
		$Params 	= array('access_token'=>$_SESSION['meli_access_token']);
    	$Request	= $Meli->get('/users/me',$Params);
		$MeliUser	= $Request['body'];
		$User		= $DB->fetchAssoc('user','*','id='.$MeliUser->id);
		if(count($User)<1)
		{
			$_SESSION['id'] = $MeliUser->id;
			$_SESSION['nickname'] = $MeliUser->nickname;
			$_SESSION['email'] = $MeliUser->email;
			$_SESSION['first_name'] = $MeliUser->first_name;
			$_SESSION['last_name'] = $MeliUser->last_name;
			$_SESSION['site_id'] = $MeliUser->site_id;
			RequestQuestions();
			$DB->execQuery("INSERT","user","id,nickname,email,first_name,last_name,site_id,meli_code,meli_access_token,meli_refresh_token,meli_expires_in,creation_date",$MeliUser->id.",'".$MeliUser->nickname."','".$MeliUser->email."','".$MeliUser->first_name."','".$MeliUser->last_name."','".$MeliUser->site_id."','".$_SESSION['meli_code']."','".$_SESSION['meli_access_token']."','".$_SESSION['meli_refresh_token']."',".$_SESSION['meli_expires_in'].",NOW()");
			
		}else{
			$DB->execQuery("UPDATE","user","meli_access_token='".$_SESSION['meli_access_token']."' meli_refresh_token='".$_SESSION['meli_refresh_token']."' meli_expires_in=".$_SESSION['meli_expires_in'],"id=".$MeliUser->id);
			$_SESSION['id'] = $User[0]['id'];
			$_SESSION['nickname'] = $User[0]['nickname'];
			$_SESSION['email'] = $User[0]['email'];
			$_SESSION['first_name'] = $User[0]['first_name'];
			$_SESSION['last_name'] = $User[0]['last_name'];
			$_SESSION['site_id'] = $User[0]['site_id'];
			
		}
	    header("Location: ../main/main.php");
    	
    	die();
    }else{
	    /// MELI LOGIN
		$_SESSION['meli'] = true;
	    $Meli = new Meli($_SESSION['meli_application_id'],$_SESSION['meli_secret']);
	    header("Location: ".$Meli->getAuthUrl($MeliURL, Meli::$AUTH_URL['MLA']));
	    die();
    }
?>
