<?php
$host = "localhost";
$dbname = "login_db"; // Change to your actual database name
$username = "root";
$password = "";

// Create MySQLi connection
$mysqli = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($mysqli->connect_errno) {
    die("Database connection failed: " . $mysqli->connect_error);
}

// Set charset
$mysqli->set_charset("utf8mb4");

// Return the connection inside an array
return [
    'mysqli' => $mysqli
];
?>
