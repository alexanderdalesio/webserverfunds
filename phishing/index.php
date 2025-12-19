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
        <div class="contents">
            <h1>
                <span class="blue">G</span>
                <span class="red">o</span>
                <span class="yellow">o</span>
                <span class="blue">g</span>
                <span class="green">l</span>
                <span class="red">e</span>
            </h1>
            
            <div class="search-box">
                <form action="/search.php" method="post">
                    <input type="text" id="query" name="query">
                    <input type="submit" value="Search">
                </form>
            </div>
        </div>
    </body>
</html>