<?php
session_start();

require 'vendor/autoload.php';

$client = new Google_Client();
$client->setClientId('1033645016400-q050v75dol5m9ekuk52r2toit00cu5jv.apps.googleusercontent.com');
$client->setClientSecret('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');
$client->setRedirectUri('http://localhost/loginbygoogle/callback.php');
 // Change URL as per your setup
$client->addScope('email');
$client->addScope('profile');
?>
