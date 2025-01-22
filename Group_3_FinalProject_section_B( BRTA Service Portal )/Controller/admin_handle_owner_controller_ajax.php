<?php
require_once('../model/admin_handle_owner_model_ajax.php');

// Get the feedback data from the model
$status = getinfo();

$feedbacks = []; // Array to store feedback data

if ($status && mysqli_num_rows($status) > 0) {
    // Fetch each row as an associative array
    while ($row = mysqli_fetch_assoc($status)) {
        // Access individual fields like 'username'
        $id = $row['id'];

        $username = $row['first_owner_name'];

        $email = $row['second_owner_name'];
        $feedback = $row['status'];

        // Push each feedback to the $feedbacks array
        $feedbacks[] = [ 'id'=>"$id",'username' => $username, 'email' => $email, 'feedback' => $feedback];
    }
    // Return all feedbacks as a JSON array
    echo json_encode($feedbacks);
} else {
    echo json_encode([]); // Return an empty array if no feedback
}
?>
