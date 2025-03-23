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
    <link href="https://fonts.googleapis.com/css2?family=Anta&family=SUSE:wght@100..800&display=swap" rel="stylesheet">
    <title>Forgot Password</title>
    
    <style>
      
        :root {
            --background-color: #1a1a1a;
            --card-background: rgba(0, 0, 0, 0.7); 
            --text-color: #fff;
            --highlight-color: #d40464;
            --button-hover-color: #541ae0;
        }

        body {
            margin: 0;
            font-family: "SUSE", sans-serif;
            color: var(--text-color);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .background-image {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url('egPic.jpg'); 
            background-size: cover;
            background-position: center;
            filter: blur(5px); 
            z-index: -1; 
        }

        /* Container for the form */
        .logIncontainer {
            z-index: 2; 
            background: var(--card-background);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.5);
            width: 90%;
            max-width: 400px;
            text-align: center; 
        }

        .log-in {
            display: flex;
            flex-direction: column;
            align-items: center; 
        }

        h1 {
            font-family: "Anta", sans-serif;
            font-weight: bold;
            padding-bottom: 20px;
            margin: 0;
            color: var(--highlight-color);
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.7);
        }

        input {
            font-family: "SUSE", sans-serif;
            background: var(--card-background);
            padding: 12px 15px;
            margin: 8px 0;
            width: 100%;
            max-width: 300px; 
            border-radius: 5px;
            border: none;
            outline: none;
            color: var(--text-color);
            box-sizing: border-box;
            transition: background 0.3s ease-in-out;
        }

        button {
            font-family: "SUSE", sans-serif;
            color: #fff;
            background: var(--highlight-color);
            font-size: 14px;
            font-weight: bold;
            padding: 10px 30px; 
            margin: 20px 0;
            border-radius: 15px;
            border: none;
            outline: none;
            letter-spacing: 1px;
            text-transform: uppercase;
            cursor: pointer;
            box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.3);
            transition: background 0.3s ease, transform 80ms ease-in;
            width: auto; 
        }

        button:hover {
            background: var(--button-hover-color);
        }

        button:active {
            transform: scale(0.95);
        }

        .passColour a {
            font-family: "SUSE", sans-serif;
            font-size: 14px;
            text-decoration: none;
            color: var(--highlight-color);
            text-shadow: 0.5px 0.5px #541ae0;
            display: block; 
            text-align: center; 
            margin: 15px 0;
        }

        .passColour a:hover {
            text-decoration: underline;
        }

        /* Add some responsiveness */
        @media (max-width: 600px) {
            .logIncontainer {
                padding: 20px;
                width: 80%;
            }

            h1 {
                font-size: 24px;
            }

            button {
                padding: 10px 20px;
            }
        }
    </style>
</head>
<body class="logInPage_body">
    <!-- Background Image -->
    <div class="background-image"></div>

    <!-- Form Container -->
    <div class="logIncontainer">
        <div class="log-in">
            <form method="post">
                <h1>Forgot Password</h1>
                <input type="email" name="email" id="email" required placeholder="Please enter your email">
                <button type="submit">Send Reset Link</button>
                <p class="passColour">
                    <a href="login.html">Back to Login</a>
                </p>
            </form>
        </div>
    </div>
</body>
</html>
