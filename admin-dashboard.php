<?php
session_start();
if (!isset($_SESSION["admin_logged_in"]) || $_SESSION["admin_logged_in"] !== true) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <h1>Welcome, Admin</h1>
    <p>Manage users, products, and website settings here.</p>
    <a href="admin-logout.php">Logout</a>
</body>
</html>
