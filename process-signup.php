<?php
$db_connections = require __DIR__ . "/database.php";

$mysqli1 = $db_connections['mysqli1'];
include 'header.php';
if (empty($_POST["name"])) {
    
    echo "<div class='content'>";
    echo "<h1>sign in </h1>";
    echo "<p>Name is required.</p>";
    echo "<p>Please <a href='login.html'>sign in</a> or click the button below.</p>";
    echo "<button onclick=\"window.location.href='login.html'\">Go to sign in</button>";
    echo "</div>";
    exit();
}

if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    
    echo "<div class='content'>";
    echo "<h1>sign in </h1>";
    echo "<p>Valid email is required.</p>";
    echo "<p>Please <a href='login.html'>sign in</a> or click the button below.</p>";
    echo "<button onclick=\"window.location.href='login.html'\">Go to sign in</button>";
    echo "</div>";
    exit();
    
}

if (strlen($_POST["pswd"]) < 8) {
   
    echo "<div class='content'>";
    echo "<h1>sign in </h1>";
    echo "<p>Password must be at least 8 characters.</p>";
    echo "<p>Please <a href='login.html'>sign in</a> or click the button below.</p>";
    echo "<button onclick=\"window.location.href='login.html'\">Go to sign in</button>";
    echo "</div>";
    exit();
    
}

if ( ! preg_match("/[a-z]/i", $_POST["pswd"])) {
    
    echo "<div class='content'>";
    echo "<h1>sign in </h1>";
    echo "<p>Password must contain at least one letter.</p>";
    echo "<p>Please <a href='login.html'>sign in</a> or click the button below.</p>";
    echo "<button onclick=\"window.location.href='login.html'\">Go to sign in</button>";
    echo "</div>";
    exit();
}

if ( ! preg_match("/[0-9]/", $_POST["pswd"])) {

    echo "<div class='content'>";
    echo "<h1>sign in </h1>";
    echo "<p>Password must contain at least one number.</p>";
    echo "<p>Please <a href='login.html'>sign in</a> or click the button below.</p>";
    echo "<button onclick=\"window.location.href='login.html'\">Go to sign in</button>";
    echo "</div>";
    exit();
}



$password_hash = password_hash($_POST["pswd"], PASSWORD_DEFAULT);

if (!$mysqli1) {
    die("Failed to connect to login_db");
}
if (!$conn) {
    die("Failed to connect to search_db");
}
$sql_check = "SELECT * FROM user WHERE email = ?";
$stmt_check = $mysqli1->stmt_init();

if (!$stmt_check->prepare($sql_check)) {
    die("SQL error: " . $mysqli1->error);
}

$stmt_check->bind_param("s", $_POST['email']);
$stmt_check->execute();
$result = $stmt_check->get_result();


if ($result->num_rows > 0) {
    echo "<div class='content'>";
    echo "<h1>Login</h1>";
    echo "<p>Email already in use. Please use a different email, or <a href='login.html'>log in</a>.</p>";
    echo "</div>";
    exit();
}



$sql = "INSERT INTO user (name, email, password_hash) VALUES (?, ?, ?)";
$stmt = $mysqli1->stmt_init();

if (!$stmt->prepare($sql)) {
    die("SQL error: " . $mysqli1->error);
}

$stmt->bind_param("sss",
    $_POST['name'],
    $_POST['email'],
    $password_hash
);

if ($stmt->execute()) {
  
    header("Location: signup-success.html");
    exit;
} else {
  
    die($stmt->error);
}


?>




