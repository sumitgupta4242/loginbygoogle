<?php
require 'config.php';

if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    
    if (!isset($token['error'])) {
        $client->setAccessToken($token['access_token']);
        $_SESSION['access_token'] = $token['access_token'];

        // Get user profile
        $oauth2 = new Google_Service_Oauth2($client);
        $userInfo = $oauth2->userinfo->get();

        $_SESSION['user'] = [
            'name' => $userInfo->name,
            'email' => $userInfo->email,
            'picture' => $userInfo->picture
        ];

        header('Location: dashboard.php');
        exit();
    } else {
        echo "Authentication Error!";
    }
}
?>
