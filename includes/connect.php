<?php
    $server = "localhost";
    $db_user = "root";
    $db_pass = "root";
    $db_name = "todo";


$link = mysqli_connect($server, $db_user, $db_pass, $db_name);

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}


?>
