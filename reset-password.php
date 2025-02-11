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
   
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

    
    if ($password !== $confirmPassword) {
        die("Passwords do not match. Please try again.");
    }
    if (strlen($password) < 8) {
        die("Password must be at least 8 characters long.");
    }

    if (!preg_match("/[a-zA-Z]/", $password)) {
        die("Password must contain at least one letter.");
    }

    if (!preg_match("/[0-9]/", $password)) {
        die("Password must contain at least one number.");
    }
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
    <link href="https://fonts.googleapis.com/css2?family=Anta&family=SUSE:wght@100..800&display=swap" rel="stylesheet">
    <title>Reset Password</title>
    <style>
        /* CSS Styles */
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

        /* Toggle Password Visibility */
        .password-toggle {
            display: flex;
            align-items: center;
            padding-left: 55px;
            justify-content: flex-end;
            width: 100%;
            max-width: 300px;
            margin: 8px 0;
        }

        .password-toggle label {
            font-size: 14px;
            color: var(--text-color);
            margin-left: 40px;
            cursor: pointer;
            white-space: nowrap;
            
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

        /* Add responsiveness */
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
    <div class="background-image"></div>

    <!-- Form Container -->
    <div class="logIncontainer">
        <div class="log-in">
            <form method="post">
                <h1>Reset Password</h1>
                <!-- New Password Field -->
                <input type="password" name="password" id="password" required placeholder="Enter new password">
                <!-- Confirm Password Field -->
                <input type="password" name="confirm-password" id="confirm-password" required placeholder="Confirm new password">
                <!-- Toggle Password Visibility -->
                <div class="password-toggle">
                <label for="toggle-password">Show Password</label>
                <input type="checkbox" id="toggle-password">
                </div>
                <button type="submit">Reset Password</button>
                <p class="passColour">
                    <a href="login.html">Back to Login</a>
                </p>
            </form>
        </div>
    </div>

    <!-- JavaScript for Toggle Visibility -->
    <script>
        const togglePassword = document.getElementById('toggle-password');
        const passwordFields = document.querySelectorAll('input[type="password"]');

        togglePassword.addEventListener('change', () => {
            passwordFields.forEach(field => {
                field.type = togglePassword.checked ? 'text' : 'password';
            });
        });
    </script>
</body>
</html>