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
        <!-- Link to external CSS -->
        <link rel="stylesheet" href="style.css">
        
        <!-- Tab name -->
        <title>Google Search</title>
    </head>
    <body>
        <h1>Google</h1>
        
        <div class="search-box">
            <form action="/search.php" method="post">
                <input type="text" id="query" name="query">
                <input type="submit" value="Search">
            </form>
        </div>
    </body>
</html>