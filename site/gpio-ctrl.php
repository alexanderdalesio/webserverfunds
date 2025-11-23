<?php
$server = "localhost";
$username = "php";
$password = "password";
$database = "puppiesDB";

$conn = mysqli_connect($server, $username, $password, $database);

$action = $_GET['action'] ?? null;

if ($action === "on") {
    shell_exec("gpio mode 7 out");
    shell_exec("gpio write 7 1");
    echo "GPIO turned ON";
}

else if ($action === "off") {
    shell_exec("gpio mode 7 out");
    shell_exec("gpio write 7 0");
    echo "GPIO turned OFF";
}

else if ($action === "toggle") {
    shell_exec("gpio mode 7 out");
    shell_exec("gpio toggle 7");
    echo "GPIO toggled";
}

else { }

?>

<!DOCTYPE html>
<html>
    <head>
        <!--Link to External CSS Sheet-->
        <link rel="stylesheet" href="style.css">

        <!--Webpage Tab Name-->
        <title>GPIO Control</title>
    </head>
    <body>
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
                <p id="buttonText"></p>
            </div>
        </div>

        <div class="bg-image" id="bg"></div>

            <!-- Better than placing 8 consecutive breaks -->
            <div class="pad1">
                <p> </p>
            </div>

        <div class="gpio-control">
            <div class="divider">
                <h2>GPIO Control Panel</h2>
            </div>
            <p>Use the buttons below to control the GPIO pins on the server</p>
            <table class="gpio-buttons">
                <tr>
                    <td>
                        <div class="gpio-button" id="onButton">
                            <p>On</p>
                        </div>
                    </td>
                    <td>
                        <div class="gpio-button" id="offButton">
                            <p>Off</p>
                        </div>
                    </td>
                    <td>
                        <div class="gpio-button" id="toggleButton">
                            <p>Toggle</p>
                        </div>
                    </td>
                </tr>
            </table>

            <br><br>

            <table class="sensor-values">
                <tr>
                    <td>
                        <p2 class="sensor-value"><b>Temperature</b>:</p2>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p2 class="sensor-value"><b>Humidity</b>:</p2>
                    </td>
                </tr>
                <tr>    
                    <td>
                        <p2 class="sensor-value"><b>Pressure</b>:</p2>
                    </td>
                </tr>
                <tr>    
                    <td>
                        <p2 class="sensor-value"><b>Altitude</b>:</p2>
                    </td>
                </tr>
                <tr>    
                    <td>
                        <div class="refresh-button" id="refreshButton">
                            <p>Refresh</p>
                        </div>
                    </td>
                </tr>
            </table>
            <div class="divider-tight"></div>
        </div>
        
        <div class="user-agent">
            <p><?= $_SERVER["HTTP_USER_AGENT"] ?></p>
        </div>

        <script src="script.js"></script>
    </body>
</html>