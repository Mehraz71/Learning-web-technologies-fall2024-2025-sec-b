<?php
function getConnection()
{
    $conn = new mysqli('localhost', 'root', '', 'brta');
    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }
    return $conn;
}
?>