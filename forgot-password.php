<?php
// 引入数据库连接和 PHPMailer
require 'database.php';
require 'sendemail/phpmailer/src/Exception.php';
require 'sendemail/phpmailer/src/PHPMailer.php';
require 'sendemail/phpmailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// 获取数据库连接
$databases = require 'database.php';
$mysqli = $databases['mysqli_login'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 验证用户输入的邮箱
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    if (!$email) {
        echo "请输入有效的邮箱地址！";
        exit();
    }

    // 检查邮箱是否存在
    $stmt = $mysqli->prepare("SELECT id FROM user WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
        // 生成唯一 Token
        $token = bin2hex(random_bytes(50));

        // 将 Token 插入数据库，并设置过期时间
        $stmt = $mysqli->prepare("INSERT INTO password_resets (email, token, expires_at) VALUES (?, ?, DATE_ADD(NOW(), INTERVAL 30 MINUTE))");
        $stmt->bind_param("ss", $email, $token);
        $stmt->execute();

        // 配置 PHPMailer
        $mail = new PHPMailer(true);
        try {
            // SMTP 配置
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Gmail SMTP 主机
            $mail->SMTPAuth = true;
            $mail->Username = '2778967812wyf@gmail.com'; // 你的 Gmail 地址
            $mail->Password = 'xcvddjpywiozmmfq'; // 你的 Gmail 应用专用密码
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // 使用 SSL 加密
            $mail->Port = 587; // Gmail SMTP 的 SSL 端口

            // 设置邮件发送方和接收方
            $mail->setFrom('2778967812wyf@gmail.com', 'Your App Name'); // 发件人
            $mail->addAddress($email); // 收件人

            // 邮件内容
            $mail->isHTML(true);
            $mail->Subject = 'Password Reset';
            $resetLink = "http://localhost/atmp/reset-password.php?token=" . $token;
            $mail->Body = "Click the link to reset your password: <a href='$resetLink'>$resetLink</a>";


            // 发送邮件
            $mail->send();
            echo "重置链接已发送到您的邮箱，请检查。";
        } catch (Exception $e) {
            echo "邮件发送失败：" . $mail->ErrorInfo;
        }
    } else {
        echo "该邮箱未注册！";
    }
}
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <h1>忘记密码</h1>
    <form method="post">
        <label for="email">邮箱地址</label>
        <input type="email" name="email" id="email" required placeholder="请输入您的邮箱">
        <button type="submit">发送重置链接</button>
    </form>
</body>
</html>
