<?php

session_start();

if(isset($_SESSION['user_data'])){
$userData=$_SESSION['user_data'];           
$name=$userData['Name'];
$email=$userData['Email'];
$age=$userData['Age'];
$gender=$userData['Gender'];
$dob=$userData['Date of Birth'];
$blood=$userData['Blood Group'];
$degree=$userData['Degrees'] ?? [];


echo"<h1>Welcome to Dashboard</h1>";

echo "<h3>Name          : $name</h3>";
echo "<h3>Email         : $email</h3>";
echo "<h3>Age           : $age</h3>";
echo "<h3>Gender        : $gender</h3>";
echo "<h3>Date Of Birth : $dob</h3>";
echo "<h3>Blood Group   : $blood</h3>";
echo "<h3>Degrees       : " . implode(', ', $degree) . "</h3>";


echo"<a href='logout.php' > <h2>Logout</h2> </a>";


}






?>