<!-- Database (puppiesDB) -->
<?php
$server = "localhost";
$username = "php";
$password = "password";
$database = "phishingDB";

$conn = mysqli_connect($server, $username, $password, $database);

$action = $_GET['action'] ?? null;

$IP = $_SERVER["REMOTE_ADDR"];
$query = htmlspecialchars($_POST['query']);

$sql = "INSERT INTO phishList (IP, query)
        VALUES ('$IP', '$action')";

$result = mysqli_query($conn, $sql);

header("Location: https://www.google.com/search?q=$query");

mysqli_close($conn);
?>