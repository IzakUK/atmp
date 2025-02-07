<?php
$host1 = "localhost";
$dbname1 = "login_db"; // 第一个数据库
$username1 = "root";
$password1 = "";

$host2 = "localhost";
$dbname2 = "search_db"; // 第二个数据库
$username2 = "root";
$password2 = "";

// 连接 login_db
$mysqli1 = new mysqli($host1, $username1, $password1, $dbname1);
if ($mysqli1->connect_errno) {
    die("Connection error to login_db: " . $mysqli1->connect_error);
}
// 设置字符集
$mysqli1->set_charset("utf8mb4");

// 连接 search_db
$mysqli2 = new mysqli($host2, $username2, $password2, $dbname2);
if ($mysqli2->connect_errno) {
    die("Connection error to search_db: " . $mysqli2->connect_error);
}
// 设置字符集
$mysqli2->set_charset("utf8mb4");

// 返回数据库连接
return [
    'mysqli_login' => $mysqli1,
    'mysqli_search' => $mysqli2,
    'conn' => $mysqli2 
];
?>
