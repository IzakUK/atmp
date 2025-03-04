<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include database connection
$db_connections = require __DIR__ . "/database.php";
$mysqli = $db_connections['mysqli_login'];

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST["email"]);
    $password = $_POST["pswd"];
    $is_admin = isset($_POST["admin"]); // Check if "Login as Admin" is selected

    // **Set the correct table name based on user type**
    $table = $is_admin ? "admin" : "user"; // Your database uses "user", not "users"

    // **Prepare SQL query, ensuring it matches the database structure**
    $stmt = $mysqli->prepare("SELECT id, name, email, password_hash FROM $table WHERE email = ?");
    if (!$stmt) {
        die("SQL Error: " . $mysqli->error);
    }

    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    // **Check if user exists and verify password**
    if ($user && password_verify($password, $user["password_hash"])) {
        session_regenerate_id(true); // Regenerate session ID for security

        // **User login process**
        $_SESSION["user_logged_in"] = true;
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["user_name"] = $user["name"]; // Store username
        
        header("Location: login-success.html");
        exit;
    } else {
        $is_invalid = true; // User does not exist or password is incorrect
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <style>
    body {
        background-image: url('homebanner.jpg');
        background-size: cover; 
        background-repeat: no-repeat;
         
    }
</style>
</head>
<body>
    
    <h1>Login</h1>
    
    <?php if ($is_invalid): ?>
        <em>Invalid login</em>
    <?php endif; ?>
    
    <form method="post">
        <label for="email">email</label>
        <input type="email" name="email" id="email"
               value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
        
        <label for="password">Password</label>
        <input type="password" name="pswd" id="password">
        
          <!-- Checkbox for Admin Login -->
          <label class="admin-checkbox">
            <input type="checkbox" name="admin" value="1"> Login as Admin
        </label>
        <button>Log in</button>
    </form>
    
</body>
</html>







