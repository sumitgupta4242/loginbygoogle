<?php
session_start();
if (!isset($_SESSION['access_token'])) {
    header('Location: index.php');
    exit();
}

$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome, <?= $user['name'] ?></h2>
    <img src="<?= $user['picture'] ?>" alt="Profile Picture" width="100">
    <p>Email: <?= $user['email'] ?></p>
    <a href="logout.php">Logout</a>
</body>
</html>
