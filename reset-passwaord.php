<?php
$databases = require 'database.php'; // 获取数据库连接
$mysqli = $databases['mysqli_login']; // 获取 login_db 的连接

if (!isset($_GET['token'])) {
    die("无效的请求！");
}

$token = $_GET['token'];

// 检查 Token 是否有效
$stmt = $mysqli->prepare("SELECT email FROM password_resets WHERE token = ? AND expires_at > NOW()");
$stmt->bind_param("s", $token);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();

if (!$data) {
    die("链接无效或已过期！");
}

$email = $data['email'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // 更新用户密码
    $stmt = $mysqli->prepare("UPDATE user SET password_hash = ? WHERE email = ?");
    $stmt->bind_param("ss", $newPassword, $email);
    $stmt->execute();

    // 删除 Token
    $stmt = $mysqli->prepare("DELETE FROM password_resets WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    echo "密码已重置，请重新登录！";
}
?>

<form method="post">
    <input type="password" name="password" required placeholder="输入新密码">
    <button type="submit">重置密码</button>
</form>
