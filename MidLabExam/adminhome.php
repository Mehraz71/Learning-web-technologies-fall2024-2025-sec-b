<?php

session_start();

if(isset($_SESSION['user_data'])){
$userData=$_SESSION['user_data'];           
$name=$userData['Name'];



echo"<h1>Welcome $name ! </h1>";

echo"<a href='profile.php' > <h2>Profile</h2> </a>";
echo"<a href='changepassword.php' > <h2>Change Password</h2> </a>";
echo"<a href='viewusers.php' > <h2>View Users</h2> </a>";
echo"<a href='logout.php' > <h2>Logout</h2> </a>";


}






?>



