<?php
$conn = mysqli_connect("localhost", "php", "password", "phishingDB");
if (!$conn) {
  http_response_code(500);
  exit;
}

$query = $_POST['query'] ?? '';
$ip = $_SERVER['REMOTE_ADDR'] ?? '';
$agent = $_SERVER['HTTP_USER_AGENT'] ?? '';

$stmt = $conn->prepare(
  "INSERT INTO phishList (IP, agent, `query`) VALUES (?, ?, ?)"
);
$stmt->bind_param("sss", $ip, $agent, $query);
$stmt->execute();