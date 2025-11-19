<?php
$server = "localhost";
$username = "php";
$password = "password";
$database = "puppiesDB";

$conn = mysqli_connect($server, $username, $password, $database);

$action = $_GET['action'] ?? null;

if ($action === "on") {
    shell_exec("gpio write 7 1");
    echo "GPIO turned ON";
}

else if ($action === "off") {
    shell_exec("gpio write 7 0");
    echo "GPIO turned OFF";
}

else if ($action === "toggle") {
    shell_exec("gpio toggle 7");
    echo "GPIO toggled";
}

else { 
    echo "no action"; 
}
?>