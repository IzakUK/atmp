<?php

$host1 = "localhost";
$dbname1 = "login_db";
$username1 = "root";
$password1 = "";

$mysqli1 = new mysqli($host1,$username1,$password1,$dbname1);
                     
if ($mysqli1->connect_errno) {
    die("Connection error: " . $mysqli1->connect_error);
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname2 = "search_db"; 

$conn = new mysqli($servername, $username, $password, $dbname2);

if ($conn->connect_error) {
    die("failure in link: " . $conn->connect_error);
}


return [
    'mysqli1' => $mysqli1,
    'conn' => $conn
];

?>