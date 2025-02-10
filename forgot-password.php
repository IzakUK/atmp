<?php

require 'database.php';
require 'sendemail/phpmailer/src/Exception.php';
require 'sendemail/phpmailer/src/PHPMailer.php';
require 'sendemail/phpmailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$databases = require 'database.php';
$mysqli = $databases['mysqli_login'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //check email
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    if (!$email) {
        echo "请输入有效的邮箱地址！";
        exit();
    }

    // Check whether the mailbox exists
    $stmt = $mysqli->prepare("SELECT id FROM user WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
        
        $token = bin2hex(random_bytes(50));

        
        $stmt = $mysqli->prepare("INSERT INTO password_resets (email, token, expires_at) VALUES (?, ?, DATE_ADD(NOW(), INTERVAL 30 MINUTE))");
        $stmt->bind_param("ss", $email, $token);
        $stmt->execute();

        
        $mail = new PHPMailer(true);
        try {
            // SMTP set
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; 
            $mail->SMTPAuth = true;
            $mail->Username = '2778967812wyf@gmail.com'; 
            $mail->Password = 'xcvddjpywiozmmfq'; 
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
            $mail->Port = 587; 

            
            $mail->setFrom('2778967812wyf@gmail.com', 'Your App Name'); 
            $mail->addAddress($email); 

            
            $mail->isHTML(true);
            $mail->Subject = 'Password Reset';
            $resetLink = "http://localhost/atmp/reset-password.php?token=" . $token;
            $mail->Body = "Click the link to reset your password: <a href='$resetLink'>$resetLink</a>";


            
            $mail->send();
            echo "Reset link has been sent to your email, please check.";
        } catch (Exception $e) {
            echo "e-mail sending failed :" . $mail->ErrorInfo;
        }
    } else {
        echo "This email is not registered!";
    }
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
<body>
    <h1>Forgot Password</h1>
    <form method="post">
        <label for="email">email address</label>
        <input type="email" name="email" id="email" required placeholder="Please enter your email">
        <button type="submit">Send reset link</button>
    </form>
</body>
</html>
