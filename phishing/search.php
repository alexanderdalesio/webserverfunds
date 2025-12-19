<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$server = "localhost";
$username = "php";
$password = "password";
$database = "phishingDB";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    http_response_code(500);
    exit("DB connection failed");
}

$query = $_POST['query'] ?? '';
$ip = $_SERVER['REMOTE_ADDR'] ?? '';
$agent = $_SERVER['HTTP_USER_AGENT'] ?? '';

$stmt = $conn->prepare(
    "INSERT INTO phishList (IP, agent, `query`) VALUES (?, ?, ?)"
);
$stmt->bind_param("sss", $ip, $agent, $query);
$stmt->execute();

echo "OK";