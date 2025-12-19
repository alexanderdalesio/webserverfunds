<!-- Connect to the database -->
<?php
$server = "localhost";
$username = "php";
$password = "password";
$database = "phishingDB";

$conn = mysqli_connect($server, $username, $password, $database);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Google Search</title>
    </head>
    <body>
        <h1>Google</h1>
        
        <div class="search">
            <form action="/search.php">
                <label for="query">Search: </label>
                <input type="text" id="query" name="query">
            </form>
        </div>
    </body>
</html>