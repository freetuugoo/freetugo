<?php
	require_once "g-config.php";
	include_once('../db.php');

	if (isset($_SESSION['access_token']))
		$gClient->setAccessToken($_SESSION['access_token']);
	else if (isset($_GET['code'])) {
		$token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
		$_SESSION['access_token'] = $token;
	} else {
		echo "<script>window.location.href = 'http://localhost/fritugo/index.php'</script>";
		exit();
	}

	$oAuth = new Google_Service_Oauth2($gClient);
	$userData = $oAuth->userinfo_v2_me->get();

    // echo "<pre>";
    // var_dump($userData);
	$_SESSION['email'] = $userData['email'];
    $_SESSION['picture'] = $userData['picture'];
    $_SESSION['name'] = $userData['name'];

    $email = $_SESSION['email'];
    $username = strstr($email, '@', true);
	$image = $_SESSION['picture'];
	
	if(!DB::query('SELECT username FROM users WHERE username=:username AND email=:email', array(':username'=>$username, ':email'=>$email))) {
        DB::query('INSERT INTO users VALUES (\'\', :username, :email, \'\', \'\', \'\')', array(':username'=>$username, ':email'=>$email));
        $cstrong = TRUE;
        $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
        $userid = DB::query('SELECT id FROM users WHERE username=:username AND email=:email', array(':username'=>$username, ':email'=>$email))[0]['id'];
        DB::query('INSERT INTO login_tokens VALUES (\'\', :token, :user_id)', array(':token'=>sha1($token), ':user_id'=>$userid));
        
        setcookie("FCID", $token, time() + 60 * 60 * 24 * 7, "/", NULL, NULL, TRUE);
        setcookie("FCID_", '1', time() + 60 * 60 * 24 * 3, "/", NULL, NULL, TRUE);

        DB::query('INSERT INTO user_images VALUES (\'\', :user_id, :image, :default_image)', array(':user_id'=>$userid, ':image'=>$image, ':default_image'=>'1'));
    } else {
        $cstrong = TRUE;
        $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
        $userid = DB::query('SELECT id FROM users WHERE username=:username AND email=:email', array(':username'=>$username, ':email'=>$email))[0]['id'];
        DB::query('INSERT INTO login_tokens VALUES (\'\', :token, :user_id)', array(':token'=>sha1($token), ':user_id'=>$userid));

        setcookie("FCID", $token, time() + 60 * 60 * 24 * 7, "/", NULL, NULL, TRUE);
        setcookie("FCID_", '1', time() + 60 * 60 * 24 * 3, "/", NULL, NULL, TRUE);
    }
    echo "<script>window.location = 'http://localhost/fritugo/dashboard.php'</script>";
    exit();
?>