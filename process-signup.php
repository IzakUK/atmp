<?php

if (empty($_POST["name"])) {
    die("Name is required");
}

if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

if (strlen($_POST["pswd"]) < 8) {
    die("Password must be at least 8 characters");
}

if ( ! preg_match("/[a-z]/i", $_POST["pswd"])) {
    die("Password must contain at least one letter");
}

if ( ! preg_match("/[0-9]/", $_POST["pswd"])) {
    die("Password must contain at least one number");
}



$password_hash = password_hash($_POST["pswd"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database.php";

$sql_check = "SELECT * FROM user WHERE email = ?";
$stmt_check = $mysqli->stmt_init();

if (!$stmt_check->prepare($sql_check)) {
    die("SQL error: " . $mysqli->error);
}

$stmt_check->bind_param("s", $_POST['email']);
$stmt_check->execute();
$result = $stmt_check->get_result();

// 如果邮箱已存在，提示用户更换邮箱
if ($result->num_rows > 0) {
    die("Email already in use. Please use a different email.");
}

// 插入用户数据
$sql = "INSERT INTO user (name, email, password_hash) VALUES (?, ?, ?)";
$stmt = $mysqli->stmt_init();

if (!$stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("sss",
    $_POST['name'],
    $_POST['email'],
    $password_hash
);

if ($stmt->execute()) {
    // 插入成功，跳转到成功页面
    header("Location: signup-success.html");
    exit;
} else {
    // 处理插入失败的情况
    die($stmt->error);
}







