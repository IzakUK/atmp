<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include database connection
$db_connections = require __DIR__ . "/database.php";
$mysqli = $db_connections['mysqli_login']; // Ensure correct database

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST["email"]); 
    $password = $_POST["pswd"];
    $is_admin = isset($_POST["admin"]); // Check if "Login as Admin" is selected

    // Choose correct table based on user type
    $table = $is_admin ? "admin" : "users";

    // Prepare and execute SQL statement
    $stmt = $mysqli->prepare("SELECT id, full_name, email, password_hash, role FROM $table WHERE email = ?");
    if (!$stmt) {
        die("SQL Error: " . $mysqli->error);
    }
    
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    // Check if user exists and verify password
    if ($user && password_verify($password, $user["password_hash"])) {
        if ($is_admin) {
            // Admin login
            if ($user['role'] === 'superadmin' || $user['role'] === 'editor') {
                $_SESSION["admin_logged_in"] = true;
                $_SESSION["admin_id"] = $user["id"];
                $_SESSION["admin_role"] = $user["role"];
                header("Location: admin-dashboard.php");
                exit;
            } else {
                $is_invalid = true;
            }
        } else {
            // User login
            $_SESSION["user_logged_in"] = true;
            $_SESSION["user_id"] = $user["id"];
            header("Location: login-success.html");
            exit;
        }
    } else {
        $is_invalid = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>

    <h1>Login</h1>

    <?php if ($is_invalid): ?>
        <em>Invalid login credentials. Please try again.</em>
    <?php endif; ?>

    <form method="post">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?= htmlspecialchars($_POST["email"] ?? "") ?>" required>
        
        <label for="password">Password</label>
        <input type="password" name="pswd" id="password" required>

        <!-- Checkbox for Admin Login -->
        <label class="admin-checkbox">
            <input type="checkbox" name="admin" value="1"> Login as Admin
        </label>
        
        <button type="submit">Log in</button>
    </form>

</body>
</html>
