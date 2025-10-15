<?php
require 'config.php';

if (isset($_SESSION['access_token'])) {
    header('Location: dashboard.php');
    exit();
}

$google_login_url = $client->createAuthUrl();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login with Google</title>
    <style>
        body { text-align: center; font-family: Arial, sans-serif; }
        .btn { background-color: #db4437; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none; }
    </style>
</head>
<body>
    <h2>Login with Google</h2>
    <a href="<?= $google_login_url ?>" class="btn">Login with Google</a>
</body>
</html>
