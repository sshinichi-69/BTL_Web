<?php
$productLink = new mysqli("localhost","root","","shop");

// Check connection
if ($productLink -> connect_errno) {
    echo "Failed to connect to MySQL: " . $productLink -> connect_error;
    exit();
}
?>