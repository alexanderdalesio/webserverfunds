<?php
$server = "localhost";
$username = "php";
$password = "password";
$database = "puppiesDB";

$conn = mysqli_connect($server, $username, $password, $database);

if (!isset($_GET['action'])) {
    http_response_code(400);
    echo "no action";
    exit;
}

$action = $_GET['action'];

if ($action === "on") {
    // example GPIO or shell command
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
    http_response_code(400);
    echo "invalid action";
}
?>
