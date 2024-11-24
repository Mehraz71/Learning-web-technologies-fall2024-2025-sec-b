<?php
session_start();

if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $pass =trim($_POST['pass']);
    $email = trim($_POST['email']);
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $bloodGroup = $_POST['bloodgroup'];
    $degrees = $_POST['degree'] ?? [];

    if (!empty($name) && !empty($email) && !empty($age) && !empty($gender) && !empty($dob) && !empty($bloodGroup) && !empty($degrees)) {
        $_SESSION['user_data'] = [
            'Name' => $name,
            'Pass' => $pass,
            'Email' => $email,
            'Age' => $age,
            'Gender' => $gender,
            'Date of Birth' => $dob,
            'Blood Group' => $bloodGroup,
            'Degrees' => $degrees,
        ];
        $_SESSION['xyz'] = true;
        echo " <h1>Registration Success !</h1>";
        echo"<a href='login.php' </a>Next";
        
        



        exit();
    } else {
        echo "All fields are required.";
    }
}
?>
