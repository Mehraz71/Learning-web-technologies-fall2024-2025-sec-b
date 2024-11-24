<?php
session_start();

// Initialize the session array if not already set
if (!isset($_SESSION['registrations'])) {
    $_SESSION['registrations'] = [];
}

if (isset($_POST['submit'])) {
    // Collect the form data
    $data = [
        'name' => $_POST['name'] ?? '',
        'email' => $_POST['email'] ?? '',
        'age' => $_POST['age'] ?? '',
        'gender' => $_POST['Gender'] ?? '',
        'dob' => [
            'day' => $_POST['day'] ?? '',
            'month' => $_POST['month'] ?? '',
            'year' => $_POST['year'] ?? ''
        ],
        'bloodgroup' => $_POST['bloodgroup'] ?? '',
        'degree' => $_POST['degree'] ?? []
    ];

    // Store the collected data into the session array
    $_SESSION['registrations'][] = $data;

    // Display a success message
    echo "Data has been stored in the session.";
}

// Display all stored data in the session
if (!empty($_SESSION['registrations'])) {
    echo "<h3>All Registered Data:</h3>";
    foreach ($_SESSION['registrations'] as $index => $registration) {
        echo "<strong>Registration " . ($index + 1) . ":</strong><br>";
        echo "Name: " . htmlspecialchars($registration['name']) . "<br>";
        echo "Email: " . htmlspecialchars($registration['email']) . "<br>";
        echo "Age: " . htmlspecialchars($registration['age']) . "<br>";
        echo "Gender: " . htmlspecialchars($registration['gender']) . "<br>";
        echo "Date of Birth: " . htmlspecialchars($registration['dob']['day']) . "/" . htmlspecialchars($registration['dob']['month']) . "/" . htmlspecialchars($registration['dob']['year']) . "<br>";
        echo "Blood Group: " . htmlspecialchars($registration['bloodgroup']) . "<br>";
        echo "Degree(s): " . implode(', ', array_map('htmlspecialchars', $registration['degree'])) . "<br><br>";
    }
}
?>
