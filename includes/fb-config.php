<?php
    session_start();

    include_once('Facebook/autoload.php');

    $FB = new \Facebook\Facebook([
        'app_id' => '1380254128747223',
        'app_secret' => '91981c1fc8a8a23b3eb37b4444f950a0',
        'default_graph_version' => 'v2.12'
    ]);

    $helper = $FB->getRedirectLoginHelper();
?>