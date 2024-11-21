<?php

session_start();

if (isset($_POST['submit'])) {
$email=trim($_POST['email']);


if ($email == null) {
    echo "<h1>Null username</h1>";
}
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<h1>Must be a valid email address (e.g., anything@example.com)</h1>";
}

else {
    
    echo "<h1>Email is valid!</h1>";
   
  
}
}

?>





