<?php
require_once('connection.php');

function getinfo() {
    $conn = getConnection();

    // Query for fetching feedback data
    $sql = "SELECT * FROM ownership_transfer";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        // Log error for debugging
        error_log("SQL Error: " . mysqli_error($conn));
    }

    return $result;
}
?>
