<?php
	// session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("695671700298-od25eephikhcjd5peil2f10kp9cr61ja.apps.googleusercontent.com");
	$gClient->setClientSecret("BPVuqPwwVu425jqOcnuhyGjv");
	$gClient->setApplicationName("Fritugo");
	$gClient->setRedirectUri("http://localhost/fritugo/includes/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
