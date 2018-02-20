<?php
    include_once('fb-config.php');
    include_once('../db.php');

    try {
        $accessToken = $helper->getAccessToken();
    } catch (\Facebook\Exceptions\FacebookResponseException $e) {
        echo "Response Exception: " . $e->getMessage();
        exit();
    } catch (\Facebook\Exceptions\FacebookSDKException $e) {
        echo "SDK Exception: " . $e->getMessage();
        exit();
    }

    if (!$accessToken) {
        header('Location: index.php');
        exit();
    }

    $oAuth2Client = $FB->getOAuth2Client();
    if (!$accessToken->isLongLived())
        $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
    
    $response = $FB->get("/me?fields=id, name, email, picture.type(large)", $accessToken);
    $userData = $response->getGraphNode()->asArray();
    $_SESSION['userData'] = $userData;
    $_SESSION['access_token'] = (string) $accessToken;

    $email = $_SESSION['userData']['email'];
    $username = strstr($email, '@', true);
    $image = $_SESSION['userData']['picture']['url'];

    if(!DB::query('SELECT username FROM users WHERE username=:username AND email=:email', array(':username'=>$username, ':email'=>$email))) {
        DB::query('INSERT INTO users VALUES (\'\', :username, :email, \'\', \'\', \'\')', array(':username'=>$username, ':email'=>$email));
        $cstrong = TRUE;
        $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
        $userid = DB::query('SELECT id FROM users WHERE username=:username', array(':username'=>$username))[0]['id'];
        DB::query('INSERT INTO login_tokens VALUES (\'\', :token, :user_id)', array(':token'=>sha1($token), ':user_id'=>$userid));
        
        setcookie("FCID", $token, time() + 60 * 60 * 24 * 7, "/", NULL, NULL, TRUE);
        setcookie("FCID_", '1', time() + 60 * 60 * 24 * 3, "/", NULL, NULL, TRUE);

        DB::query('INSERT INTO user_images VALUES (\'\', :user_id, :image, :default_image)', array(':user_id'=>$userid, ':image'=>$image, ':default_image'=>'1'));
    } else {
        $cstrong = TRUE;
        $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
        $userid = DB::query('SELECT id FROM users WHERE username=:username', array(':username'=>$username))[0]['id'];
        DB::query('INSERT INTO login_tokens VALUES (\'\', :token, :user_id)', array(':token'=>sha1($token), ':user_id'=>$userid));

        setcookie("FCID", $token, time() + 60 * 60 * 24 * 7, "/", NULL, NULL, TRUE);
        setcookie("FCID_", '1', time() + 60 * 60 * 24 * 3, "/", NULL, NULL, TRUE);
    }
    echo "<script>window.location = 'http://localhost/fritugo/dashboard.php'</script>";
    exit();
?>