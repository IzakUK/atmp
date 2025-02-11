<?php
$databases = require 'database.php'; 
$mysqli = $databases['mysqli_login']; 

if (!isset($_GET['token'])) {
    die("Invalid request!");
}

$token = $_GET['token'];


$stmt = $mysqli->prepare("SELECT email FROM password_resets WHERE token = ? AND expires_at > NOW()");
$stmt->bind_param("s", $token);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();

if (!$data) {
    die("Link is invalid or expired!");
}

$email = $data['email'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

    
    $stmt = $mysqli->prepare("UPDATE user SET password_hash = ? WHERE email = ?");
    $stmt->bind_param("ss", $newPassword, $email);
    $stmt->execute();

    
    $stmt = $mysqli->prepare("DELETE FROM password_resets WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    echo "Password has been reset, please login again!";
}
?>

<!--The front-end code is here-->

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<form method="post">
    <input type="password" name="password" required placeholder="Enter new password">
    <button type="submit">reset passwords</button>
</form>
</html>