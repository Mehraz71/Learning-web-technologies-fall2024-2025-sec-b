<?php
require_once('../model/admin_feedbackview_ajax.php');

// Get the feedback data from the model
$status = getinfo();

$feedbacks = []; // Array to store feedback data

if ($status && mysqli_num_rows($status) > 0) {
    // Fetch each row as an associative array
    while ($row = mysqli_fetch_assoc($status)) {
        // Access individual fields like 'username'
        $username = $row['username'];
        $email = $row['email'];
        $feedback = $row['feedback'];

        // Push each feedback to the $feedbacks array
        $feedbacks[] = ['username' => $username, 'email' => $email, 'feedback' => $feedback];
    }
    // Return all feedbacks as a JSON array
    echo json_encode($feedbacks);
} else {
    echo json_encode([]); // Return an empty array if no feedback
}
?>
