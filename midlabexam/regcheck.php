<?php
session_start();

if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $bloodGroup = $_POST['bloodgroup'];
    $degrees = $_POST['degree'] ?? [];

    if (!empty($name) && !empty($email) && !empty($age) && !empty($gender) && !empty($dob) && !empty($bloodGroup) && !empty($degrees)) {
        $_SESSION['user_data'] = [
            'Name' => $name,
            'Email' => $email,
            'Age' => $age,
            'Gender' => $gender,
            'Date of Birth' => $dob,
            'Blood Group' => $bloodGroup,
            'Degrees' => $degrees,
        ];

        echo " <h1>Registration Success !</h1>";
        echo"<a href='login.html' </a>Next";
        exit();
    } else {
        echo "All fields are required. Please fill out the form completely.";
    }
}
?>
