<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbname = "logitech";
$link = new mysqli($serverName, $userName, $password, $dbname);

// Check connection
if ($link -> connect_errno) {
    echo "Failed to connect to MySQL: " . $link -> connect_error;
    exit();
}
?>