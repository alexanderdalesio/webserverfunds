<!-- Database (puppiesDB) -->
<?php
$server = "localhost";
$username = "php";
$password = "password";
$database = "phishingDB";

$conn = mysqli_connect($server, $username, $password, $database);

$IP = $_SERVER["REMOTE_ADDR"];
$query = htmlspecialchars($_POST['query']);

$sql = "INSERT INTO phishList (IP, query)
        VALUES ('$IP', '$query')";

$result = mysqli_query($conn, $sql);

echo $result 
    ? "✅ Data inserted successfully<br>"
    : "❌ Error inserting data: " . mysqli_error($conn);

mysqli_close($conn);
?>