<!-- Connect to the database -->
<?php
$server = "alexpi.local";
$username = "php";
$password = "password";
$database = "phishingDB";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "✅ Connected successfully<br>";
?>


<!DOCTYPE html>
<html>
    