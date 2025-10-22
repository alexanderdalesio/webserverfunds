<!-- Form processing -->
<p><?= $_SERVER["HTTP_USER_AGENT"] ?></p>
<br><br>
<p>Your favorite puppy breed is: <?= htmlspecialchars($_POST['breed1']) ?></p>
<p>Followed by: <?= htmlspecialchars($_POST['breed2']) ?></p>
<p>And lastly: <?= htmlspecialchars($_POST['breed3']) ?></p>
<p>You successfully confirmed your submission by entering: <?= htmlspecialchars($_POST['confirm']) ?></p>

<!-- Database (puppiesDB) -->
<?php
$server = "localhost";
$username = "php";
$password = "password";
$database = "puppiesDB";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";

$breed1 = htmlspecialchars($_POST['breed1']);
$breed2 = htmlspecialchars($_POST['breed2']);
$breed3 = htmlspecialchars($_POST['breed3']);
$confirm = htmlspecialchars($_POST['confirm']);

$sql = "INSERT INTO rankings (breed1, breed2, breed3, confirm)
        VALUES ('$breed1', '$breed2', '$breed3', '$confirm')";

$result = mysqli_query($conn, $sql);

echo $result 
    ? "Data inserted successfully.<br>"
    : "Error inserting data: " . mysqli_error($conn);

mysqli_close($conn);
?>