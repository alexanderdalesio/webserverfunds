<!DOCTYPE html>
<html>
    <head>
        <!--Link to External CSS Sheet-->
        <link rel="stylesheet" href="style.css">
        
        <!--Webpage Tab Name-->
        <title>Puppy Rankings</title>
    </head>
    <body>
        <div class=form-info>
            <!--Header-->
            <div class="header">
                <div class="links">
                    <p4><a href="index.html" class="alt">Home</a></p4>
                    <p4> | </p4>
                    <p4><a href="rankings.php" class="alt">Rankings</a></p4>
                    <p4> | </p4>
                    <p4><a href="gpio-ctrl.php" class="alt">GPIO Control</a></p4>
                </div>

                <div class="logo">
                    <h3>puppies.com</h3>
                </div>

                <!--Create a create a div that looks like a button-->
                <div class="button" id="myButton">
                    <p id="buttonText"></p2>
                </div>
            </div>

            <div class="bg-image" id="bg"></div>
            
            <!-- Form processing -->
            <h1>Your Rankings</h1>
            <br><br><br>
            <p2><b>Your favorite puppy breed is: </b><br><?= htmlspecialchars($_POST['breed1']) ?></p2>
            <p2><b>Followed by: </b><br><?= htmlspecialchars($_POST['breed2']) ?></p2>
            <p2><b>And lastly: </b><br><?= htmlspecialchars($_POST['breed3']) ?></p2>
            <p2><b>You successfully confirmed your submission by entering: </b><br><?= htmlspecialchars($_POST['confirm']) ?></p2>

            <div class=debug>
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
                echo "✅ Connected successfully<br>";

                $breed1 = htmlspecialchars($_POST['breed1']);
                $breed2 = htmlspecialchars($_POST['breed2']);
                $breed3 = htmlspecialchars($_POST['breed3']);
                $confirm = htmlspecialchars($_POST['confirm']);

                $sql = "INSERT INTO rankings (breed1, breed2, breed3, confirm)
                        VALUES ('$breed1', '$breed2', '$breed3', '$confirm')";

                $result = mysqli_query($conn, $sql);

                echo $result 
                    ? "✅ Data inserted successfully<br>"
                    : "❌ Error inserting data: " . mysqli_error($conn);

                mysqli_close($conn);
                ?>
            </div>
        </div>

        <script src="script.js"></script>
    </body>
</html>