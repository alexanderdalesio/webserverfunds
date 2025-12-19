<!-- Connect to the database -->
<?php
$server = "localhost";
$username = "php";
$password = "password";
$database = "phishingDB";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Google Search</title>
    </head>
    <body>
        <h1>Google</h1>
        <p>Search</p>
    </body>
</html>